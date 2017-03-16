<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Pacientes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class VisitasController extends AbstractActionController
{
   
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            //Comenzamos hacer la query
            $query = new \VisitaQuery();

            
            //JOIN
            $query->joinEmpleadoRelatedByIdempleado()->withColumn('empleado_nombre');
            $query->joinPaciente()->withColumn('paciente_nombre');
            $query->joinClinica()->withColumn('clinica_nombre');
            
            //WHERE
            $query->filterByIdclinica($post_data['clinicas']);
            $query->filterByIdempleado($post_data['empleados']);
            $query->filterByVisitaYear($post_data['year']);
            $query->filterByVisitaMonth($post_data['months']);
            $query->filterByVisitaEstatuspago('pagada');
            if(isset($post_data['estatus'])){
               $query->usePacienteQuery()->usePacienteseguimientoQuery()->groupByIdpaciente()->orderByPacienteseguimientoFecha(\Criteria::ASC)->filterByIdestatusseguimiento($post_data['estatus'])->endUse()->endUse();
            }
            if(isset($post_data['estatusfecha']) && !empty($post_data['estatusfecha']['from']))  {
                $query->usePacienteQuery()->usePacienteseguimientoQuery()->groupByIdpaciente()->withColumn('pacienteseguimiento_fecha')->orderByPacienteseguimientoFecha(\Criteria::DESC)->filterByPacienteseguimientoFecha(array('min' => $post_data['estatusfecha']['from']." 00:00:00",'max' => $post_data['estatusfecha']['to']." 23:59:00"))->endUse()->endUse();
            }
           
           
            if($post_data['order'][0] == 'asc'){
                $query->orderBy('visita_fechainicio', \Criteria::ASC);
            }else{
                $query->orderBy('visita_day', \Criteria::DESC);
            }
            
            $query->groupByIdpaciente();
            
            $recordsFiltered = $query->count();

            
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            //ORDER (TODO)

            //SEARCH
            if(!empty($post_data['search']['value'])){
                $search_value = $post_data['search']['value'];
                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('paciente.paciente_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('paciente.paciente_celular', '%'.$search_value.'%', \Criteria::LIKE);
                //$c3= $c->getNewCriterion('paciente.paciente_fecharegistro', '%'.$search_value.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('empleado.empleado_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c5= $c->getNewCriterion('clinica.clinica_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                
                $c1->addOr($c2)->addOr($c4)->addOr($c5);

                $query->addAnd($c1);

            }

            //Damos el formato
            $data = array();
            

            foreach ($query->find() as $value){
                
                $paciente_fecharegistro = new \DateTime($value->getPaciente()->getPacienteFecharegistro());
  
                $tmp['DT_RowId'] = $value->getIdpaciente();
                
                ////Obtener si tiene membresía activa y/o pago anticipado
                    $tmp['paciente_pago'] = '';
                    $tmp['paciente_membresia']='';
                    $pacientemembresias = \PacientemembresiaQuery::create()->filterByIdpaciente($value->getIdpaciente())->filterByPacientemembresiaEstatus("activa")->find();
                    $pacientemembresia= new \Pacientemembresia();
                    foreach($pacientemembresias as $pacientemembresia )
                    {
                        
                        if( strpos($pacientemembresia->getMembresia()->getMembresiaNombre(),"PAGO")!== false)
                        {
                            $haspago=true;
                            $tmp['paciente_pago'] ='<span class="badge" style="background:black;color:white">P</span>';
                        }
                        if( strpos($pacientemembresia->getMembresia()->getMembresiaNombre(),"MEMBRESIA")!== false)
                        {
                            $hasmembresia=true;
                            $tmp['paciente_membresia'] ='<span class="badge" style="background:black;color:white">M</span>';
                        }
                    }
                ////
                
                
                //$tmp['clinica_nombre'] = $value->getPaciente()->getClinica()->getClinicaNombre();
                $tmp['idpaciente'] = $value->getIdpaciente();
                $tmp['paciente_fecharegistro'] = $paciente_fecharegistro->format('d/m/Y');
                $tmp['paciente_nombre'] = $value->getPaciente()->getPacienteNombre();
                $tmp['paciente_celular'] = $value->getPaciente()->getPacienteCelular();
                $tmp['empleado_nombre'] = $value->getEmpleadoRelatedByIdempleado()->getEmpleadoNombre();
                
                //OBTENEMOS EL ULTIMO ESSTATUS DE SEGUIMIENTO
                 $tmp['paciente_estatus'] = '<td>N/D</td>';
                 $tmp['paciente_fechaestatus'] = 'N/D';
                 if(\PacienteseguimientoQuery::create()->filterByIdpaciente($value->getIdpaciente())->orderByPacienteseguimientoFecha(\Criteria::ASC)->exists()){
                    $paciente_seguimiento = \PacienteseguimientoQuery::create()->filterByIdpaciente($value->getIdpaciente())->orderByPacienteseguimientoFecha(\Criteria::DESC)->findOne();
                    $tmp['paciente_estatus'] = '<td><span class="badge" style="background:'.$paciente_seguimiento->getEstatusseguimiento()->getEstatusseguimientoColor().'"></span><a class="ver_seguimientos" href="javascript:void(0)"><i class="fa fa-plus-square" style="float:right"></i></a></td>';
                    $tmp['paciente_fechaestatus'] = $paciente_seguimiento->getPacienteseguimientoFecha('d/m/Y');
                }

                //LA ULTIMA CITA
                $tmp['paciente_visita'] = '<td>N/D</td>';
                if(\VisitaQuery::create()->filterByIdpaciente($value->getIdpaciente())->filterByVisitaFechainicio(array('min' => new \DateTime()))->exists()){
                    $paciente_visita = \VisitaQuery::create()->filterByIdpaciente($value->getIdpaciente())->filterByVisitaFechainicio(array('min' => new \DateTime()))->orderByVisitaFechainicio(\Criteria::ASC)->findOne();
                    $tmp['paciente_visita'] = $paciente_visita->getVisitaFechainicio('d/m/Y H:i');
                }
                
                
                $tmp['visitas'] = \VisitaQuery::create()->filterByVisitaEstatuspago('pagada')->orderByVisitaFechainicio($post_data['order'][0])->filterByIdpaciente($value->getIdpaciente())->filterByIdclinica($post_data['clinicas'])->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
                
                $data[] = $tmp;
 
            } 
            
            $visitas = $query->orderByVisitaFechainicio(\Criteria::DESC)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);;
            
            //Comparamos la fecha de hoy con el primer registro, para obtener las columnas (fechas)
            $first_date = new \DateTime();
            if(isset($visitas[0])){
                $first_date = new \DateTime($visitas[0]['visita_fechainicio']);
            }
            $fist_date_year = (int)$first_date->format('Y');
            $today = new \DateTime();
            
            $today_year = (int)$today->format('Y');
            $interval = $today_year - $fist_date_year;

                        

            //El arreglo que regresamos
            $json_data = array(
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $recordsFiltered,
                "data"            => $data,
                'year_start' =>(int) $first_date->format('Y'),
                'interval' => (int)$interval,
            );
            
           
            return $this->getResponse()->setContent(json_encode($json_data));
           
            
        }
    }
    
    public function serversideBackAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();

            //Comenzamos hacer la query
            $query = new \PacienteQuery();

            //JOIN
            $query->joinEmpleado()->withColumn('empleado_nombre');
            $query->joinClinica()->withColumn('clinica_nombre');
            

            //WHERE
            $query->filterByIdclinica($post_data['clinicas']);
            $query->filterByIdempleado($post_data['empleados']);
            
            
            $recordsFiltered = $query->count();
                        
             //SELECT
            //$query->select(array('idpaciente','paciente_nombre','paciente_celular','paciente_fecharegistro'));
            
            //$result = $pacienteQuery->paginate($post_data['start'],$post_data['length']);
            
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            //ORDER (TODO)
//            SELECT paciente.idpaciente, paciente_nombre FROM `paciente` WHERE paciente.idpaciente IN (select visita.idpaciente from visita,paciente where visita_year=2015 and visita.visita_month=10 GROUP by paciente.idpaciente ORDER by visita.visita_day asc )
                
            $query->useVisitaQuery()->orderByVisitaDay($post_data['order'][0])->groupByIdpaciente()->endUse();
            
            //SEARCH
            if(!empty($post_data['search']['value'])){
                $search_value = $post_data['search']['value'];
                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('paciente.paciente_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('paciente.paciente_celular', '%'.$search_value.'%', \Criteria::LIKE);
                //$c3= $c->getNewCriterion('paciente.paciente_fecharegistro', '%'.$search_value.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('empleado.empleado_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c5= $c->getNewCriterion('clinica.clinica_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                
                $c1->addOr($c2)->addOr($c4)->addOr($c5);

                $query->addAnd($c1);

            }

            //Damos el formato
            $data = array();
            //$query->useVisitaQuery()->orderByVisitaFechainicio($post_data['order'][0])->endUse();
 

            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                
                $paciente_fecharegistro = new \DateTime($value['paciente_fecharegistro']);
                 ////Obtener si tiene membresía activa y/o pago anticipado
                    $pago=str_repeat('&nbsp;', 7);
                    $membresia=str_repeat('&nbsp;', 7);
                    $pacientemembresias = \PacientemembresiaQuery::create()->filterByIdpaciente($value['idpaciente'])->filterByPacientemembresiaEstatus("activa")->find();
                    $pacientemembresia= new \Pacientemembresia();
                    foreach($pacientemembresias as $pacientemembresia )
                    {
                        
                        if( strpos($pacientemembresia->getMembresia()->getMembresiaNombre(),"PAGO")!== false)
                        {
                            $haspago=true;
                            $pago=" - P -";
                        }
                        if( strpos($pacientemembresia->getMembresia()->getMembresiaNombre(),"MEMBRESIA")!== false)
                        {
                            $hasmembresia=true;
                            $membresia=" - M -";
                        }
                    }
                ////
               
                $tmp['DT_RowId'] = $value['idpaciente'];
                $tmp['clinica_nombre'] = $value['clinica_nombre'];
                $tmp['idpaciente'] = $value['idpaciente'];
                $tmp['paciente_fecharegistro'] = $paciente_fecharegistro->format('d/m/Y');
                $tmp['paciente_nombre'] = $pago.$membresia.$value['paciente_nombre'];
                $tmp['paciente_celular'] = $value['paciente_celular'];
                $tmp['empleado_nombre'] = $value['empleado_nombre'];
                $tmp['visitas'] = \VisitaQuery::create()->filterByVisitaYear($post_data['year'])->filterByVisitaMonth($post_data['months'])->filterByVisitaEstatuspago('pagada')->orderByVisitaFechainicio($post_data['order'][0])->filterByIdpaciente($value['idpaciente'])->filterByIdclinica($post_data['clinicas'])->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
                
                $data[] = $tmp;
 
            }   
            
            //$visitas = \VisitaQuery::create()->filterByIdempleado($post_data['empleados'])->filterByVisitaEstatuspago('pagada')->orderByVisitaCreadaen(\Criteria::ASC)->joinPaciente()->withColumn('paciente_nombre')->withColumn('paciente_celular')->joinClinica()->withColumn('clinica_nombre')->filterByIdclinica($post_data['clinicas'])->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);;
            $visitas = $query->useVisitaQuery()->orderByVisitaFechainicio(\Criteria::ASC)->endUse()->withColumn('visita_fechainicio')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

            //Comparamos la fecha de hoy con el primer registro, para obtener las columnas (fechas)
            $first_date = new \DateTime();
            if(isset($visitas[0])){
                $first_date = new \DateTime($visitas[0]['visita_fechainicio']);
            }
            $today = new \DateTime();
            $interval = $first_date->diff($today);
            

            //El arreglo que regresamos
            $json_data = array(
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $recordsFiltered,
                "data"            => $data,
                'year_start' =>(int) $first_date->format('Y'),
                'interval' => (int)$interval->format('%y')

            );
            
       

            
            return $this->getResponse()->setContent(json_encode($json_data));
           
            
        }
    }
   public function filterAction(){
       
       $request = $this->getRequest();
       
       if($request->isPost()){
           
           $post_data = $request->getPost();
           
           $pacientes = \PacienteQuery::create()->joinClinica()->withColumn('clinica_nombre')->filterByIdclinica($post_data['clinicas'])->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
           
           $visitas = \VisitaQuery::create()->filterByVisitaEstatuspago('pagada')->orderByVisitaCreadaen(\Criteria::ASC)->joinPaciente()->withColumn('paciente_nombre')->withColumn('paciente_celular')->joinClinica()->withColumn('clinica_nombre')->filterByIdclinica($post_data['clinicas'])->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);;
                      
           //Comparamos la fecha de hoy con el primer registro, para obtener las columnas (fechas)
           $first_date = new \DateTime();
           if(isset($visitas[0])){
               $first_date = new \DateTime($visitas[0]['visita_creadaen']);
           }
           $today = new \DateTime();
           $interval = $first_date->diff($today);
           
           return $this->getResponse()->setContent(json_encode(array('pacientes' => $pacientes, 'visitas' => $visitas,'year_start' =>(int) $first_date->format('Y'),'interval' => (int)$interval->format('%y'))));
       }
       
   }
    
    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();
        
        //Las clinicas
        $clinicas = \ClinicaQuery::create()->find();
        $empleados = \ClinicaempleadoQuery::create()->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
        $first_visita = \VisitaQuery::create()->orderByVisitaFechainicio('asc')->limit(1)->findOne();
        $now = new \DateTime();
        $estatus = \EstatusseguimientoQuery::create()->find();
        
        $years = array(
            'from' =>(int) $first_visita->getVisitaFechainicio('Y'),
            'to' => (int)$now->format('Y'),
        );
        
        return new ViewModel(array(
            'empleados' => $empleados,
            'session' => $session->getData(),
            'clinicas' => $clinicas,
            'years' => $years,
            'estatus' => $estatus,
        ));
    }
}
