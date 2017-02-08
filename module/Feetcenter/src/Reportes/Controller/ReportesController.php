<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Reportes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ReportesController extends AbstractActionController
{

    public function filterclinicaAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            /*
             * Servicios
             */
            $arrServicios = array();
            
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            
            $clinica = new \Clinica();
            foreach ($clinicas as $clinica){
                //Por cada clinica obtenemos los servicios
                $cli = $clinica->toArray(\BasePeer::TYPE_FIELDNAME);
                $cli['servicios'] = array();
                $clinica_servicios = \ServicioclinicaQuery::create()->filterByIdclinica($clinica->getIdclinica())->find();
                //Por cada servicio los buscamos en nuestra tabla de visitadetalle para obtener la cantidad de vendidos
                $servicio = new \Servicioclinica();
                foreach ($clinica_servicios as $servicio){
                    $serv = $servicio->getServicio()->toArray(\BasePeer::TYPE_FIELDNAME);
                    $vendidos = \VisitadetalleQuery::create()->select('total')->withColumn('SUM(visitadetalle_cantidad)','total')->filterByIdservicioclinica($servicio->getIdservicioclinica())->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->findOne();
                    $serv['vendidos'] = (int)$vendidos;
                    $cli['servicios'][] = $serv;
                }
                $arrServicios[] = $cli;
                
            }
            
            /*
             * Productos
             */
            $arrProductos = array();
            
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            
            $clinica = new \Clinica();
            foreach ($clinicas as $clinica){
                //Por cada clinica obtenemos los servicios
                $cli = $clinica->toArray(\BasePeer::TYPE_FIELDNAME);
                $cli['productos'] = array();
                $clinica_productos = \ProductoclinicaQuery::create()->filterByIdclinica($clinica->getIdclinica())->find();
                //Por cada producto los buscamos en nuestra tabla de visitadetalle para obtener la cantidad de vendidos
                $producto = new \Productoclinica();
                foreach ($clinica_productos as $producto){
                    $prod = $producto->getProducto()->toArray(\BasePeer::TYPE_FIELDNAME);
                    $vendidos = \VisitadetalleQuery::create()->select('total')->withColumn('SUM(visitadetalle_cantidad)','total')->filterByIdproductoclinica($producto->getIdproductoclinica())->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->findOne();
                    $prod['vendidos'] = (int)$vendidos;
                    $cli['productos'][] = $prod;
                }
                $arrProductos[] = $cli;
                
            }
            
            /*
             * Membresias
             */
            $arrMembresias = array();
            
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            
            $clinica = new \Clinica();
            foreach ($clinicas as $clinica){
                //Por cada clinica obtenemos los servicios
                $cli = $clinica->toArray(\BasePeer::TYPE_FIELDNAME);
                $cli['membresias'] = array();
                $membresias = \MembresiaQuery::create()->find();
                //Por cada producto los buscamos en nuestra tabla de visitadetalle para obtener la cantidad de vendidos
                $membresia = new \Membresia();
                foreach ($membresias as $membresia){
                    $mem = $membresia->toArray(\BasePeer::TYPE_FIELDNAME);
                    $vendidos = \VisitadetalleQuery::create()->select('total')->withColumn('SUM(visitadetalle_cantidad)','total')->filterByIdmembresia($membresia->getIdmembresia())->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByidclinica($clinica->getIdclinica())->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->findOne();
                    $mem['vendidos'] = (int)$vendidos;
                    $cli['membresias'][] = $mem;
                }
                $arrMembresias[] = $cli;
                
            }
            
            return $this->getResponse()->setContent(json_encode(array('productos' => $arrProductos,'membresias' => $arrMembresias, 'servicios' => $arrServicios, 'clinicas' => $clinicas->toArray(null,false,\BasePeer::TYPE_FIELDNAME))));
            
        }
        
    }
    
    public function clinicasAction()
    {
        
        $session = new \Shared\Session\AouthSession();
        $idrol = $session->getIdrol();
        
        $clinicas = \ClinicaQuery::create()->find();
        
        if($idrol != 1){
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdClinica())->find();
        }

        return new ViewModel(array(
            'clinicas' => $clinicas,
            'session' => $session->getData(),
        ));
    }
    
    public function filterempleadoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
             
            $empleados = \EmpleadoQuery::create()->filterByIdempleado($post_data['empleados'])->find();
            
            /*
             * Servicios
             */
            
            $arrVendidos = array();

            $empleado = new \Empleado();
            
            $servicios_array = array();
            $servicios_clinica = \ServicioclinicaQuery::create()->groupByIdservicio()->find();
            foreach ($servicios_clinica as $servicio){
                $idservicio = $servicio->getIdservicio();
                $servicios_array[$idservicio] = array(
                    'servicio_nombre' => $servicio->getServicio()->getServicioNombre(),
                    'vendidos' => 0,
                );
            }
            
            /*
             * Membresias
             */
            
            $membresias_array = array();
            $membresias = \MembresiaQuery::create()->find();
            $membresia = new \Membresia();
            foreach ($membresias as $membresia){
                $idmembresia = $membresia->getIdmembresia();
                $membresias_array[$idmembresia] = array(
                    'membresia_nombre' => $membresia->getMembresiaNombre(),
                    'vendidos' => 0,
                );
            }
            
            /*
             * Productos
             */
            
            $productos_array = array();
            $productos_clinica = \ProductoclinicaQuery::create()->groupByIdproducto()->find();
            $producto = new \Productoclinica();
            foreach ($productos_clinica as $producto){
                $idproducto = $producto->getIdproducto();
                $productos_array[$idproducto] = array(
                    'producto_nombre' => $producto->getProducto()->getProductoNombre(),
                    'vendidos' => 0,
                );
            }

            foreach ($empleados as $empleado){
                $emp['idempleado'] = $empleado->getIdempleado();
                $emp['empleado_nombre'] = $empleado->getEmpleadoNombre();
                $emp['servicios'] = $servicios_array;
                $emp['membresias'] = $membresias_array;
                $emp['productos'] = $productos_array;
                //Sus visitas
                $visita_detalles_servicios = \VisitadetalleQuery::create()->filterByIdservicioclinica(NULL,\Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByIdempleado($empleado->getIdempleado())->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->find();
                //Comenzamos a itnerar sobre los detalles
                $detalle = new \Visitadetalle();
                foreach ($visita_detalles_servicios as $detalle){
                    $idservicio = $detalle->getServicioclinica()->getIdservicio();
                    $cantidad = (int) $detalle->getVisitadetalleCantidad();
                    $emp['servicios'][$idservicio]['vendidos']+=$cantidad;
                }
                
                $visita_detalles_membresias = \VisitadetalleQuery::create()->filterByIdmembresia(NULL,\Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByIdempleado($empleado->getIdempleado())->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->find();
                //Comenzamos a itnerar sobre los detalles
                $detalle = new \Visitadetalle();
                foreach ($visita_detalles_membresias as $detalle){
                    $idmembresia = $detalle->getIdmembresia();
                    $cantidad = (int) $detalle->getVisitadetalleCantidad();
                    $emp['membresias'][$idmembresia]['vendidos']+=$cantidad;
                }
                
                $visita_detalles_productos = \VisitadetalleQuery::create()->filterByIdproductoclinica(NULL,\Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByIdempleado($empleado->getIdempleado())->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->find();
                //Comenzamos a itnerar sobre los detalles
                $detalle = new \Visitadetalle();
                foreach ($visita_detalles_productos as $detalle){
                    $idproducto = $detalle->getProductoclinica()->getIdproducto();
                    $cantidad = (int) $detalle->getVisitadetalleCantidad();
                    $emp['productos'][$idproducto]['vendidos']+=$cantidad;
                }
                
                $arrVendidos[] = $emp;

            }
            
            return $this->getResponse()->setContent(json_encode(array('vendidos' => $arrVendidos,'empleados' => $empleados->toArray(null,false,\BasePeer::TYPE_FIELDNAME))));

            
        }
        
    }
    public function empleadosAction(){
        
        $session = new \Shared\Session\AouthSession();
        $idrol = $session->getIdrol();
        
        $empleados = \ClinicaempleadoQuery::create()->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
        
        if($idrol != 1){
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($session->getIdClinica())->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
        }

        return new ViewModel(array(
            'empleados' => $empleados,
            'session' => $session->getData(),
        ));
    }
    
    
    public function ventasAction(){
        $session = new \Shared\Session\AouthSession();
        $idrol = $session->getIdrol();
        
         if($idrol == 1){ //Admnistrador
            $clinicas = \ClinicaQuery::create()->find();
         }else{
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdclinica())->find();
         }
        
       return new ViewModel(array(
            'clinicas' => $clinicas,
            'session' => $session->getData(),
        ));
    }
    
    public function ventasfilterAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
           
            $result = array();
            
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            $clinica = new \Clinica();
            foreach ($clinicas as $clinica){
                $tmp['idclinica'] = $clinica->getIdclinica();
                
                $tmp['productos'] = !is_null(\VisitadetalleQuery::create()->filterByIdproductoclinica(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne()) ? \VisitadetalleQuery::create()->filterByIdproductoclinica(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne():0;
                $servicios = !is_null(\VisitadetalleQuery::create()->filterByIdservicioclinica(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne()) ? \VisitadetalleQuery::create()->filterByIdservicioclinica(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne():0;
                $membresias = !is_null(\VisitadetalleQuery::create()->filterByIdmembresia(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne()) ? \VisitadetalleQuery::create()->filterByIdmembresia(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne():0;
                $tmp['servicios'] = $servicios + $membresias;     
                
                $result[] =$tmp;
               
            }
            
             return $this->getResponse()->setContent(json_encode($result));
            
        }
    }
    
    public function tablerodecontrolAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $from = new \DateTime($post_data['from']." 00:00:00");
            $from_copy = new \DateTime($post_data['from']." 00:00:00");
            $to  = new \DateTime($post_data['to']." 00:00:00");
            $diff_month = $from->diff($to)->m + ($from->diff($to)->y*12);
            $today_from = new \DateTime();
            $today_from->setTime('0','0','0');
            $today_to = new \DateTime();
            $diff_days = $today_from->diff($to)->days + ($today_from->diff($to)->y*12);
            //$diff_days2 = $from->diff($to)->days + ($from->diff($to)->y*12);
            $diff_days3 = $from->diff($today_to)->days + ($from->diff($today_to)->y*12);
            if($today_from > $to){
                $diff_days = 0;
            }
            if($today_to > $to){
                $diff_days3 = $from->diff($to)->days + ($from->diff($to)->y*12);
            }
            
         


            $respone = array();

            /*
             * CLINICA
             */
            
            $respone['clinica'] = \ClinicaQuery::create()->findPk($post_data['idclinica'])->toArray(\BasePeer::TYPE_FIELDNAME);
            
            //META
            $respone['clinica']['clinica_meta'] = 0;
            for($i=0;$i<=$diff_month;$i++){
                 $m = $from_copy;
                 if($i>0){
                    $m->modify('+1 month');
                 }
                 
                 $metaclinica_exits = \MetaclinicaQuery::create()->filterByIdclinica($post_data['idclinica'])->filterByMetaclinicaMes((int)$m->format('m'))->filterByMetaclinicaAnio((int)$m->format('Y'))->exists();
                 if($metaclinica_exits){
                     $metaclinica = \MetaclinicaQuery::create()->filterByIdclinica($post_data['idclinica'])->filterByMetaclinicaMes((int)$m->format('m'))->filterByMetaclinicaAnio((int)$m->format('Y'))->findOne();
                     $respone['clinica']['clinica_meta']+= $metaclinica->getMetaclinicaMeta();
                     
                 }
            }
            
            //ACUMULADO
           

             $respone['clinica']['clinica_acumulado'] = 0;
             $acumulado = \VisitaQuery::create()->withColumn('SUM(Visita.VisitaTotal)','acumulado')->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->filterByIdclinica($post_data['idclinica'])->findOne()->toArray();
             if(!is_null($acumulado['acumulado'])){
                 $respone['clinica']['clinica_acumulado'] = $acumulado['acumulado'];
             }
             
             //HOY
             $respone['clinica']['clinica_hoy'] = 0;
             $hoy = \VisitaQuery::create()->withColumn('SUM(Visita.VisitaTotal)','acumulado')->filterByVisitaFechafin(array('min' => $today_from, 'max' => $today_to))->filterByVisitaEstatuspago('pagada')->filterByIdclinica($post_data['idclinica'])->findOne()->toArray();
             if(!is_null($hoy['acumulado'])){
                 $respone['clinica']['clinica_hoy'] = $hoy['acumulado'];
             }
             
             //DIAS RESTANTES
              $respone['clinica']['clinica_diasrestantes'] = $diff_days;
              
              
             /*
             * EMPLEADOS
             */
             $respone['empleados'] = array();
             $empleados = \ClinicaempleadoQuery::create()->select(array('idempleado'))->filterByIdclinica($post_data['idclinica'])->groupByIdempleado()->find()->toArray();
             foreach ($empleados as $idempleado){
                
                 $empleado = \EmpleadoQuery::create()->findPk($idempleado);
                 $tmp['idempleado'] = $empleado->getIdempleado();
                 $tmp['empleado_nombre'] = $empleado->getEmpleadoNombre();
                 
                 //META
                 $tmp['empleado_meta'] = 0;
                 $meta_exist = \MetaempleadoQuery::create()->filterByIdempleado($idempleado)->exists();
                 if($meta_exist){
                    $meta_empleado = \MetaempleadoQuery::create()->filterByIdempleado($idempleado)->findOne();
                    $tmp['empleado_meta'] = $meta_empleado->getMetaempleadoMeta();
                 }
                 
                 //DIAS RESTANTES
                 $tmp['empleado_diasrestantes'] = $diff_days;
                 
               
                $hoy = \VisitaQuery::create()->withColumn('SUM(Visita.VisitaTotal)','acumulado')->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $today_from, 'max' => $today_to))->filterByVisitaEstatuspago('pagada')->findOne()->toArray();
                $tmp['empleado_hoy'] = !is_null($hoy['acumulado']) ? $hoy['acumulado'] : 0;

                 //SERVICIOS POR DIA
                 $tmp['servicios_por_dia'] = 0;
                 $total_servicios = \VisitadetalleQuery::create()->filterByIdservicioclinica(NULL, \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->endUse()->count();
                 if($total_servicios>0){
                       $tmp['servicios_por_dia'] = $total_servicios / $diff_days3;
                       $tmp['servicios_por_dia'] = number_format($tmp['servicios_por_dia'], 2, '.', ',');
                  }
                 
                 //PRODUCTOS POR CLIENTE
                 $tmp['productos_por_cliente'] = 0;
                 $total_producto = \VisitadetalleQuery::create()->filterByIdproductoclinica(NULL, \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->endUse()->count();
                 if($total_producto>0){
                       $tmp['productos_por_cliente'] = $total_producto / $diff_days3;
                       $tmp['productos_por_cliente'] = number_format($tmp['productos_por_cliente'], 2, '.', ',');
                  }
                 
                  //VENTA PROMEDIO POR CLIENTE
                 $tmp['venta_promedio_por_cliente']  = 0;
                  $clientes_count  = \VisitaQuery::create()->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->groupByIdpaciente()->count();
                  $total_vendido = \VisitaQuery::create()->withColumn('SUM(Visita.VisitaTotal)','acumulado')->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->findOne()->toArray();
                  $total_vendido = !is_null($total_vendido['acumulado']) ? $total_vendido['acumulado'] : 0;
                  $tmp['empleado_acumulado'] = $total_vendido;
                  if($total_vendido>0){
                       $tmp['venta_promedio_por_cliente'] = $total_vendido / $clientes_count;
                       $tmp['venta_promedio_por_cliente'] = number_format($tmp['venta_promedio_por_cliente'], 2, '.', ',');
                  }
                 
                  
                  //TIEMPO PROMEDIO DE SERVICIO
                  $tmp['tiempo_promedio_servicio'] = 0;
                  $query = \VisitaQuery::create()->withColumn('SUM(Visita.VisitaDuracion)','acumulado')->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->find();
                  $querycount = \VisitaQuery::create()->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->find();
                  $query_array = $query->toArray();
                  $query_count = $querycount->count();
                
                 
                  $total_duracion = !is_null($query_array[0]['acumulado']) ? $query_array[0]['acumulado'] : 0;
                  if($total_duracion > 0){
                     $tmp['tiempo_promedio_servicio'] = $total_duracion / $query_count;
                     $tmp['tiempo_promedio_servicio'] = number_format($tmp['tiempo_promedio_servicio'], 2, '.', ',');
                  }
                 
                
                  //CLIENTES NUEVOS
                  $tmp['clientes_nuevos'] = \PacienteQuery::create()->filterByIdempleado($idempleado)->filterByPacienteFecharegistro(array('min' => $from, 'max' => $to))->count();
                  
                  //MEMBRESIAS
                  $tmp['membresias']  = 0;
                  $total_membresias = \VisitadetalleQuery::create()->filterByIdmembresia(NULL, \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->endUse()->count();
                  if($total_membresias>0){
                      $tmp['membresias'] = $total_membresias / $diff_days3;
                  }
                  
                  //PAGOS ANTICIPADOS
                  $tmp['pagos_anticipados'] = 0;
                  $visita_detalles =  \VisitadetalleQuery::create()->filterByIdmembresia(NULL, \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->endUse()->find();
                  $detalle = new \Visitadetalle();
                  foreach ($visita_detalles as $detalle){
                      $membresia = $detalle->getMembresia();
                      if (strpos(strtoupper($membresia->getMembresiaNombre()), 'PAGO') !== false) {
                             $tmp['pagos_anticipados']++;
                       }
                  }
                  $tmp['tasa_retorno'] = array(
                      '30dias' => 0,
                      '45dias' => 0,
                      '60dias' => 0
                  );
                  $pacientes = \VisitaQuery::create()->filterByIdempleado($idempleado)->select('idpaciente')->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->groupByIdpaciente()->orderByVisitaFechainicio(\Criteria::ASC)->find()->toArray();
                  foreach ($pacientes as $idpaciente){
                      $num_visitas = \VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->orderByVisitaFechainicio(\Criteria::ASC)->count();
                      if($num_visitas > 1){
                          $visita_base = \VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->orderByVisitaFechainicio(\Criteria::ASC)->findOne();
                          $fecha = new \DateTime($visita_base->getVisitaFechainicio('Y-m-d'). "00:00:00");
                          $fecha_copy = $fecha;
                          $tmp['tasa_retorno']['30dias']+=  \VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $fecha, 'max' => $fecha_copy->modify('+30 days')))->filterByVisitaEstatuspago('pagada')->count();
                          $tmp['tasa_retorno']['45dias']+=  \VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $fecha, 'max' => $fecha_copy->modify('+15 days')))->filterByVisitaEstatuspago('pagada')->count();
                          $tmp['tasa_retorno']['60dias']+=  \VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $fecha, 'max' => $fecha_copy->modify('+15 days')))->filterByVisitaEstatuspago('pagada')->count();
                      }
                      
                  }
                  $respone['empleados'][] = $tmp;
               


             }

             return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $respone)));
        }
        
        $clinicas = \ClinicaQuery::create()->select(array('idclinica','clinica_nombre'))->find()->toKeyValue('idclinica','clinica_nombre');
        
        return new ViewModel(array(
            'clinicas' => $clinicas,

        ));


    }
}
