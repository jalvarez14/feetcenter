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
                
                $tmp['productos'] = !is_null(\VisitadetalleQuery::create()->filterByIdproductoclinica(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechafin(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne()) ? \VisitadetalleQuery::create()->filterByIdproductoclinica(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechafin(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne():0;
                $servicios = !is_null(\VisitadetalleQuery::create()->filterByIdservicioclinica(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechafin(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne()) ? \VisitadetalleQuery::create()->filterByIdservicioclinica(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechafin(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne():0;
                $membresias = !is_null(\VisitadetalleQuery::create()->filterByIdmembresia(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechafin(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne()) ? \VisitadetalleQuery::create()->filterByIdmembresia(NULL,  \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaFechafin(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->filterByIdclinica($clinica->getIdclinica())->withColumn('SUM(visitadetalle_subtotal)','total')->endUse()->select('total')->findOne():0;
                $tmp['servicios'] = $servicios + $membresias;     
                $efectivo = \VisitapagoQuery::create()->filterByVisitapagoTipo('efectivo')->select(array('total'))->withColumn('SUM(visitapago_cantidad)','total')->filterByVisitapagoFecha(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->useVisitaQuery()->filterByIdclinica($clinica->getIdclinica())->filterByVisitaEstatuspago('pagada')->endUse()->find()->toArray();
                $tarjeta = \VisitapagoQuery::create()->filterByVisitapagoTipo('tarjeta')->select(array('total'))->withColumn('SUM(visitapago_cantidad)','total')->filterByVisitapagoFecha(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->useVisitaQuery()->filterByIdclinica($clinica->getIdclinica())->filterByVisitaEstatuspago('pagada')->endUse()->find()->toArray();
                $tmp['efectivo'] = !is_null($efectivo[0]) ? $efectivo[0] : 0;
                $tmp['tarjeta'] = !is_null($tarjeta[0]) ? $tarjeta[0] : 0;
              
                
                $result[] =$tmp;
               
            }
            
             return $this->getResponse()->setContent(json_encode($result));
            
        }
    }
    
     public function horariosvaciosAction(){
        
        $request = $this->getRequest();
        $session = new \Shared\Session\AouthSession();
        $idrol = $session->getIdrol();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
             
            $from = new \DateTime($post_data['from']." 00:00:00");
           
            $from2 = date('Y-m-d',  strtotime($post_data['from']." 00:00:00"));
            
                    $from  = $from2. " 00:00:00";
                    
            $to  = new \DateTime($post_data['to']." 23:00:00");
            $to = date('Y-m-d',   strtotime($post_data['to']." 23:59:00"));
                    $to  = $to. " 23:00:00";
            $respone = array();

            
           
                       
            /*
             * CLINICA
             */
            
            
            $respone['clinica'] = \ClinicaQuery::create()->findPk($post_data['idclinica'])->toArray(\BasePeer::TYPE_FIELDNAME);
             
           $conn = \Propel::getConnection();  
           $req1 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) =10 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=10 and MINUTE(visita_fechainicio)<=29;";
                        $st = $conn->prepare($req1);
                        $st->execute();
                        $slot1 = $st->fetchAll(\PDO::FETCH_ASSOC); 
            $req2 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=10 and MINUTE(visita_fechainicio)>=30 and HOUR(visita_fechainicio) <=10 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req2);
                        $st->execute();
                        $slot2 = $st->fetchAll(\PDO::FETCH_ASSOC); 
            $req3 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=11 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=11 and MINUTE(visita_fechainicio)<=29 ;";
                        $st = $conn->prepare($req3);
                        $st->execute();
                        $slot3 = $st->fetchAll(\PDO::FETCH_ASSOC);  
                        
                        
            $req4 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=11 and MINUTE(visita_fechainicio)>=30 and HOUR(visita_fechainicio) <=11 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req4);
                        $st->execute();
                        $slot4 = $st->fetchAll(\PDO::FETCH_ASSOC);
            $req5 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=12 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=12 and MINUTE(visita_fechainicio)<=29 ;";
                        $st = $conn->prepare($req5);
                        $st->execute();
                        $slot5 = $st->fetchAll(\PDO::FETCH_ASSOC); 
            $req6 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=12 and MINUTE(visita_fechainicio)>=30 and HOUR(visita_fechainicio) <=12 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req6);
                        $st->execute();
                        $slot6 = $st->fetchAll(\PDO::FETCH_ASSOC);
            $req7 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=13 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=13 and MINUTE(visita_fechainicio)<=29 ;";
                        $st = $conn->prepare($req7);
                        $st->execute();
                        $slot7 = $st->fetchAll(\PDO::FETCH_ASSOC); 
            $req8 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=13 and MINUTE(visita_fechainicio)>=30 and HOUR(visita_fechainicio) <=13 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req8);
                        $st->execute();
                        $slot8 = $st->fetchAll(\PDO::FETCH_ASSOC);
            $req9 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=14 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=14 and MINUTE(visita_fechainicio)<=29 ;";
                        $st = $conn->prepare($req9);
                        $st->execute();
                        $slot9 = $st->fetchAll(\PDO::FETCH_ASSOC); 
            $req10 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=14 and MINUTE(visita_fechainicio)>=30 and HOUR(visita_fechainicio) <=14 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req10);
                        $st->execute();
                        $slot10 = $st->fetchAll(\PDO::FETCH_ASSOC);
            $req11 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=15 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=15 and MINUTE(visita_fechainicio)<=29 ;";
                        $st = $conn->prepare($req11);
                        $st->execute();
                        $slot11 = $st->fetchAll(\PDO::FETCH_ASSOC); 
            $req12 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada'  and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=15 and MINUTE(visita_fechainicio)>=30 and HOUR(visita_fechainicio) <=15 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req12);
                        $st->execute();
                        $slot12 = $st->fetchAll(\PDO::FETCH_ASSOC);
            $req13 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=16 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=16 and MINUTE(visita_fechainicio)<=29 ;";
                        $st = $conn->prepare($req13);
                        $st->execute();
                        $slot13 = $st->fetchAll(\PDO::FETCH_ASSOC); 
            $req14 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=16 and MINUTE(visita_fechainicio)>=30 and HOUR(visita_fechainicio) <=16 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req14);
                        $st->execute();
                        $slot14 = $st->fetchAll(\PDO::FETCH_ASSOC);
            $req15 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=17 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=17 and MINUTE(visita_fechainicio)<=29 ;";
                        $st = $conn->prepare($req15);
                        $st->execute();
                        $slot15 = $st->fetchAll(\PDO::FETCH_ASSOC); 
            $req16 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=17 and MINUTE(visita_fechainicio)>=30 and HOUR(visita_fechainicio) <=17 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req16);
                        $st->execute();
                        $slot16 = $st->fetchAll(\PDO::FETCH_ASSOC);
            $req17 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=18 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=18 and MINUTE(visita_fechainicio)<=29 ;";
                        $st = $conn->prepare($req17);
                        $st->execute();
                        $slot17 = $st->fetchAll(\PDO::FETCH_ASSOC); 
            $req18 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=18 and MINUTE(visita_fechainicio)>=30 and HOUR(visita_fechainicio) <=18 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req18);
                        $st->execute();
                        $slot18 = $st->fetchAll(\PDO::FETCH_ASSOC);
            $req19 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=19 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=19 and MINUTE(visita_fechainicio)<=29 ;";
                        $st = $conn->prepare($req19);
                        $st->execute();
                        $slot19 = $st->fetchAll(\PDO::FETCH_ASSOC); 
            $req20 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada'and  visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=19 and MINUTE(visita_fechainicio)>=30 and HOUR(visita_fechainicio) <=19 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req20);
                        $st->execute();
                        $slot20 = $st->fetchAll(\PDO::FETCH_ASSOC);
            $req21 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada'and  visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=20 and MINUTE(visita_fechainicio)>=20 and HOUR(visita_fechainicio) <=20 and MINUTE(visita_fechainicio)<=29 ;";
                        $st = $conn->prepare($req21);
                        $st->execute();
                        $slot21 = $st->fetchAll(\PDO::FETCH_ASSOC);
            $req22 = "SELECT count(idvisita) FROM visita WHERE visita_tipo='servicio' and idclinica='$post_data[idclinica]' and visita_estatuspago='pagada' and visita_fechainicio >= '$from' and visita_fechafin <='$to' and HOUR(visita_fechainicio) >=20 and MINUTE(visita_fechainicio)>=0 and HOUR(visita_fechainicio) <=20 and MINUTE(visita_fechainicio)<=59 ;";
                        $st = $conn->prepare($req22);
                        $st->execute();
                        $slot22 = $st->fetchAll(\PDO::FETCH_ASSOC);
                    
            $respone['clinica']['slot1'] = $slot1[0]['count(idvisita)'];
            $respone['clinica']['slot2'] = $slot2[0]['count(idvisita)'];
            $respone['clinica']['slot3'] = $slot3[0]['count(idvisita)'];
            $respone['clinica']['slot4'] = $slot4[0]['count(idvisita)'];
            $respone['clinica']['slot5'] = $slot5[0]['count(idvisita)'];
            $respone['clinica']['slot6'] = $slot6[0]['count(idvisita)'];
            $respone['clinica']['slot7'] = $slot7[0]['count(idvisita)'];
            $respone['clinica']['slot8'] = $slot8[0]['count(idvisita)'];
            $respone['clinica']['slot9'] = $slot9[0]['count(idvisita)'];
            $respone['clinica']['slot10'] = $slot10[0]['count(idvisita)'];
            $respone['clinica']['slot11'] = $slot11[0]['count(idvisita)'];
            $respone['clinica']['slot12'] = $slot12[0]['count(idvisita)'];
            $respone['clinica']['slot13'] = $slot13[0]['count(idvisita)'];
            $respone['clinica']['slot14'] = $slot14[0]['count(idvisita)'];
            $respone['clinica']['slot15'] = $slot15[0]['count(idvisita)'];
            $respone['clinica']['slot16'] = $slot16[0]['count(idvisita)'];
            $respone['clinica']['slot17'] = $slot17[0]['count(idvisita)'];
            $respone['clinica']['slot18'] = $slot18[0]['count(idvisita)'];
            $respone['clinica']['slot19'] = $slot19[0]['count(idvisita)'];
            $respone['clinica']['slot20'] = $slot20[0]['count(idvisita)'];
            $respone['clinica']['slot21'] = $slot21[0]['count(idvisita)'];
            $respone['clinica']['slot22'] = $slot22[0]['count(idvisita)'];
            
           
            
            
            

             return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $respone)));
        }
        
        $clinicas = \ClinicaQuery::create()->select(array('idclinica','clinica_nombre'))->find()->toKeyValue('idclinica','clinica_nombre');
        
        if($idrol != 1){
           $clinicas = \ClinicaQuery::create()->select(array('idclinica','clinica_nombre'))->filterByIdclinica($session->getIdClinica())->find()->toKeyValue('idclinica','clinica_nombre');
        }
        
        
        
        return new ViewModel(array(
            'clinicas' => $clinicas,

        ));


    }
    
    public function tablerodecontrolAction(){
            
        $request = $this->getRequest();
        $session = new \Shared\Session\AouthSession();
        $idrol = $session->getIdrol();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $from = new \DateTime($post_data['from']." 00:00:00");
            
            $yesterday = new \DateTime();
            $yesterday->modify('-1 day');
            $yesterday->setTime(23, 59,59);
           
            $from_copy = new \DateTime($post_data['from']." 00:00:00");
            $to  = new \DateTime($post_data['to']." 23:59:00");
            $diff_month = $from->diff($to)->m + ($from->diff($to)->y*12);
            $today_from = new \DateTime();
            $today_from->setTime('0','0','0');
            
           // var_dump($today_from);
            //exit();
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
            if($post_data['from']==$post_data['to']){
                $diff_days3 = 1;
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
             $acumulado = \VisitaQuery::create()->withColumn('SUM(Visita.VisitaTotal)','acumulado')->filterByVisitaFechafin(array('min' => $from, 'max' => $yesterday))->filterByVisitaEstatuspago('pagada')->filterByIdclinica($post_data['idclinica'])->findOne()->toArray();
             if(!is_null($acumulado['acumulado'])){
                 $respone['clinica']['clinica_acumulado'] = $acumulado['acumulado'];
             }
             
             //HOY
             $respone['clinica']['clinica_hoy'] = 0;
             $hoy = \VisitaQuery::create()->withColumn('SUM(Visita.VisitaTotal)','acumulado')->filterByVisitaFechafin(array('min' => $today_from, 'max' => $yesterday))->filterByVisitaEstatuspago('pagada')->filterByIdclinica($post_data['idclinica'])->findOne()->toArray();
             if(!is_null($hoy['acumulado'])){
                 $respone['clinica']['clinica_hoy'] = $hoy['acumulado'];
             }
             
             //DIAS RESTANTES
              $respone['clinica']['clinica_diasrestantes'] = $diff_days+1;
              if($respone['clinica']['clinica_diasrestantes']>0){
                $respone['clinica']['clinica_hoy'] =  ($respone['clinica']['clinica_meta']-$respone['clinica']['clinica_acumulado'])/$respone['clinica']['clinica_diasrestantes'];
              }else{
                   $respone['clinica']['clinica_hoy'] =  ($respone['clinica']['clinica_meta']-$respone['clinica']['clinica_acumulado']);
              }
              
              
             /*
             * EMPLEADOS
             */
             $respone['empleados'] = array();
             $empleados = \ClinicaempleadoQuery::create()->select(array('idempleado'))->filterByIdclinica($post_data['idclinica'])->groupByIdempleado()->find()->toArray();
              $m = $from;
             $mes = (int) $m->format('m');
             //var_dump($mes);
             //$empleados = array(11);
             foreach ($empleados as $idempleado){
                 $mes2=$mes;  
                 $empleado = \EmpleadoQuery::create()->findPk($idempleado);
                 
                 $tmp['idempleado'] = $empleado->getIdempleado();
                 $tmp['empleado_nombre'] = $empleado->getEmpleadoNombre();
                 
                 //META
//                 $tmp['empleado_meta'] = 0;
//                 $meta_exist = \MetaempleadoQuery::create()->filterByIdempleado($idempleado)->exists();
//                 if($meta_exist){
//                    $hoy = \MetaempleadoQuery::create()->withColumn('SUM(MetaEmpleado.Meta)','metaTotal')->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $today_from, 'max' => $today_to))->filterByVisitaEstatuspago('pagada')->findOne()->toArray();
//                    $meta_empleado = \MetaempleadoQuery::create()->filterByIdempleado($idempleado)->findOne();
//                    $tmp['empleado_meta'] = $meta_empleado->getMetaempleadoMeta();
//                 }
//                 
//                 $respone['clinica']['clinica_meta'] = 0;
                 $tmp['empleado_meta'] = 0;

                   
                  for($i=0;$i<=$diff_month;$i++){
                   
                    if($i>0){
                       $mes2++;
                    }
                    
                    $metaempleado_exist = \MetaempleadoQuery::create()->filterByIdempleado($idempleado)->filterByMetaempleadoMes($mes2)->filterByMetaempleadoAnio((int)$m->format('Y'))->exists();
                   
                    if($metaempleado_exist){
                        $metaempleado = \MetaempleadoQuery::create()->filterByIdempleado($idempleado)->filterByMetaempleadoMes($mes2)->filterByMetaempleadoAnio((int)$m->format('Y'))->findOne();
                        $tmp['empleado_meta']+= $metaempleado->getMetaempleadoMeta();

                    }
                }
                 
                
                 //DIAS RESTANTES
               
                 $ausencias = \AusenciaempleadoQuery::create()->filterbyIdempleado($idempleado)->filterByAusenciaempleadoFecha(array('min' => $today_from, 'max' => $to))->count();
                 
                 $tmp['empleado_diasrestantes'] = $diff_days -  $ausencias+1;
                 
                //$respone['clinica']['clinica_hoy'] =  ($respone['clinica']['clinica_meta']-$respone['clinica']['clinica_acumulado'])/$respone['clinica']['clinica_diasrestantes'];

                
                $hoy = \VisitaQuery::create()->withColumn('SUM(Visita.VisitaTotal)','acumulado')->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $from, 'max' => $yesterday))->filterByVisitaEstatuspago('pagada')->findOne()->toArray();
                //$tmp['empleado_hoy'] = !is_null($hoy['acumulado']) ? $hoy['acumulado'] : 0;
                
                if($tmp['empleado_diasrestantes']>0){
                     $tmp['empleado_hoy'] = ($tmp['empleado_meta'] - $hoy['acumulado'])/ $tmp['empleado_diasrestantes'];
                }else{
                     $tmp['empleado_hoy'] = ($tmp['empleado_meta'] - $hoy['acumulado']);
                }
               
                
                 //SERVICIOS comision detalle POR DIA
                 $tmp['servicioscomision_por_dia'] = 0;
                 //sólo se consideran los servicios que generan comisión
                 $total_servicioscomision = \VisitadetalleQuery::create()->filterByIdservicioclinica(NULL, \Criteria::NOT_EQUAL)->useServicioclinicaQuery()->useServicioQuery()->filterByServicioGeneracomision(1)->endUse()->endUse()->useVisitaQuery()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->endUse()->count();
                 //$total_servicios = \VisitaQuery::create()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->count();
                 
                 if($total_servicioscomision>0){
                       $tmp['servicioscomision_por_dia'] = $total_servicioscomision / $diff_days3;
                       $tmp['servicioscomision_por_dia'] = number_format($tmp['servicioscomision_por_dia'], 2, '.', ',');
                  }
                  
                  //SERVICIOS Entidad (entradas de clientes a cubículo) POR DIA
                 $tmp['servicios_por_dia'] = 0;
                 //sólo se consideran los servicios que generan comisión
                 //$total_servicios = \VisitadetalleQuery::create()->filterByIdservicioclinica(NULL, \Criteria::NOT_EQUAL)->useServicioclinicaQuery()->useServicioQuery()->filterByServicioGeneracomision(1)->endUse()->endUse()->useVisitaQuery()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->endUse()->count();
                 $total_servicios = \VisitaQuery::create()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->filterByVisitaTotal(0, \Criteria::GREATER_THAN)->filterByVisitaTipo("servicio")->count();
                 
                 if($total_servicios>0){
                       $tmp['servicios_por_dia'] = $total_servicios / $diff_days3;
                       $tmp['servicios_por_dia'] = number_format($tmp['servicios_por_dia'], 2, '.', ',');
                  }
                 
                 //PRODUCTOS POR CLIENTE
                 $tmp['productos_por_cliente'] = 0;
                 $total_producto = \VisitadetalleQuery::create()->filterByIdproductoclinica(NULL, \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->endUse()->count();
                 if($total_producto>0){
                       $tmp['productos_por_cliente'] =  $total_servicios>0?($total_producto/$total_servicios):0;
                       $tmp['productos_por_cliente'] = number_format($tmp['productos_por_cliente'], 2, '.', ',');
                  }
                 
                  //VENTA PROMEDIO POR CLIENTE
                 $tmp['venta_promedio_por_cliente']  = 0;
                  $clientes_count  = \VisitaQuery::create()->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->filterByVisitaTotal(0, \Criteria::GREATER_THAN)->groupByIdpaciente()->count();
                  $total_vendido = \VisitaQuery::create()->withColumn('SUM(Visita.VisitaTotal)','acumulado')->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->findOne()->toArray();
                  
                  $total_vendido = !is_null($total_vendido['acumulado']) ? $total_vendido['acumulado'] : 0;
                  $tmp['empleado_acumulado'] = $total_vendido;
                  if($total_vendido>0){
                       $tmp['venta_promedio_por_cliente'] = $total_servicios>0?($total_vendido /$total_servicios):0;
                       $tmp['venta_promedio_por_cliente'] = number_format($tmp['venta_promedio_por_cliente'], 2, '.', ',');
                  }
                 
                  
                  //TIEMPO PROMEDIO DE SERVICIO
                  $tmp['tiempo_promedio_servicio'] = 0;
                  $query = \VisitaQuery::create()->withColumn('SUM(Visita.VisitaDuracion)','acumulado')->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->filterByVisitaDuracion(0, \Criteria::GREATER_THAN)->find();
                  $querycount = \VisitaQuery::create()->filterByIdempleado($idempleado)->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->filterByVisitaDuracion(0, \Criteria::GREATER_THAN)  ->find();
                  
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
//                  $tmp['membresias']  = 0;
//                  $total_membresias = \VisitadetalleQuery::create()->filterByIdmembresia(NULL, \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->endUse()->count();
//                  if($total_membresias>0){
//                      $tmp['membresias'] = $total_membresias / $diff_days3;
//                  }
                  
                  //MEMBRESIAS
                  $tmp['membresias'] = 0;
                  $visita_detalles =  \VisitadetalleQuery::create()->filterByIdmembresia(NULL, \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->endUse()->find();
                  $detalle = new \Visitadetalle();
                  foreach ($visita_detalles as $detalle){
                      $membresia = $detalle->getMembresia();
                      if (strpos(strtoupper($membresia->getMembresiaNombre()), 'PAGO') == false) {
                             $tmp['membresias']++;
                       }
                  }
                  
                  
                  //MEMBRESIAS
                  $tmp['serviciomembresias'] = 0;
                  $visita_detalles =  \VisitadetalleQuery::create()->filterByIdservicioclinica(NULL, \Criteria::NOT_EQUAL)->useVisitaQuery()->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->endUse()->find();
                  $detalle = new \Visitadetalle();
                  foreach ($visita_detalles as $detalle){
                      $serviciomembresia = $detalle->getServicioclinica();
                        //var_dump($detalle->getIdvisitadetalle());
                        if($serviciomembresia->getServicio()->getServicioDependencia()=="membresia")
                        {
                            if(\PacientemembresiadetalleQuery::create()->filterByIdvisitadetalle($detalle->getIdvisitadetalle())->exists())
                            {
                              $membresiaitem  = \PacientemembresiadetalleQuery::create()->filterByIdvisitadetalle($detalle->getIdvisitadetalle())->findOne();
                             // var_dump($membresiaitem->getPacientemembresia()->getMembresia()->getMembresiaNombre());
                              
                              if (strpos(strtoupper($membresiaitem->getPacientemembresia()->getMembresia()->getMembresiaNombre()), 'PAGO') == false)
                              {
                                $tmp['serviciomembresias']++;
                              }
                            }
                        }
                      
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
                 //$pacientes = array(86476);
                  foreach ($pacientes as $idpaciente){
                      
                      $num_visitas = \VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->orderByVisitaFechainicio(\Criteria::ASC)->count();
                     
                      if($num_visitas > 0){
                          
                          $visita_base = \VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $from, 'max' => $to))->filterByVisitaEstatuspago('pagada')->orderByVisitaFechainicio(\Criteria::ASC)->findOne();
                          
                          $fecha = new \DateTime($visita_base->getVisitaFechainicio('Y-m-d'). "00:00:00");
                         
                          $fecha_copy = new \DateTime($fecha->format('Y-m-d'));
                         
                          //echo '<pre>';var_dump($fecha);echo '</pre>';
                          //echo '<pre>';var_dump($fecha_copy->modify('+30 days'));echo '</pre>';  
                         //  echo '<pre>';var_dump(\VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $fecha->format('Y-m-d 23:59:59'), 'max' => $fecha_copy->modify('+30 days')))->filterByVisitaEstatuspago('pagada')->toString());echo '</pre>';exit();
                          if(\VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $fecha->format('Y-m-d 23:59:59'), 'max' => $fecha_copy->modify('+30 days')))->filterByVisitaEstatuspago('pagada')->count() > 0) 
                          {
                               
                              $tmp['tasa_retorno']['30dias']++;
                              
                          }
                         
                          $fecha_copy = new \DateTime($fecha->format('Y-m-d'));
                          //echo '<pre>';var_dump($fecha);echo '</pre>';
                          //echo '<pre>';var_dump($fecha_copy->modify('+45 days'));echo '</pre>';   
                          if(\VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $fecha->format('Y-m-d 23:59:59'), 'max' => $fecha_copy->modify('+45 days')))->filterByVisitaEstatuspago('pagada')->count() >0)
                          {
                              $tmp['tasa_retorno']['45dias']++;
                              
                          }
                           $fecha_copy = new \DateTime($fecha->format('Y-m-d'));
                           //echo '<pre>';var_dump($fecha);echo '</pre>';
                          //echo '<pre>';var_dump($fecha_copy->modify('+60 days'));echo '</pre>';  
                          if(\VisitaQuery::create()->filterByIdpaciente($idpaciente)->filterByIdempleado($idempleado)->filterByIdclinica($post_data['idclinica'])->filterByVisitaFechafin(array('min' => $fecha->format('Y-m-d 23:59:59'), 'max' => $fecha_copy->modify('+60 days')))->filterByVisitaEstatuspago('pagada')->count() >0)
                          {
                               $tmp['tasa_retorno']['60dias']++;
                               
                          }
                          //exit();
                          //exit();
                         
                          
                          
                           
                         // echo '<pre>';var_dump($fecha_copy);echo '</pre>';
                          
                          //echo '<pre>';var_dump($fecha_copy);echo '</pre>';
                         // echo '<pre>';var_dump(date('Y-m-d', strtotime($fecha->format('Y-m-d'). ' + 30 days')));echo '</pre>';
                          $fecha_copy = new \DateTime($fecha->format('Y-m-d'));
                      }
                      
                  }
                 
                  $respone['empleados'][] = $tmp;
               


             }
            
             
             $from_js = $from->format('Y-m-');
             $from_js.= $from->format('d') +1;
             
             $to->modify('+1day');
             $to_js = $from->format('Y-m-d');
             return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $respone,'from' => $from_js,'to' => $to_js)));
        }
        
        $clinicas = \ClinicaQuery::create()->select(array('idclinica','clinica_nombre'))->find()->toKeyValue('idclinica','clinica_nombre');
        
        if($idrol != 1){
           $clinicas = \ClinicaQuery::create()->select(array('idclinica','clinica_nombre'))->filterByIdclinica($session->getIdClinica())->find()->toKeyValue('idclinica','clinica_nombre');
        }
        
        
        
        return new ViewModel(array(
            'clinicas' => $clinicas,

        ));


    }
}
