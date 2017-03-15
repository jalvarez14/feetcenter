<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Empleados\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EmpleadosController extends AbstractActionController
{
    public function indexAction()
    {
        $sesion = new \Shared\Session\AouthSession();
        $idrol = $sesion->getIdrol();
        
        if(in_array($idrol,array(1,6,2))){
            $clinicas = \ClinicaQuery::create()->find();
            $idclinica = 1;
            
            if($idrol == 2){
                $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
                $idclinica = $sesion->getIdClinica();
            }
            
        
        }else{
             $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
             $idclinica = $sesion->getIdClinica();
             
             //----
           
            $tmp['lunes'] = '';
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('lunes')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('lunes')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['lunes'] = 'descanso';
                }else{
                    $tmp['lunes'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                    $tmp['lunes'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                }                    
            }
            $tmp['martes'] = '';
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('martes')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('martes')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['martes'] = 'descanso';
                }else{
                    $tmp['martes'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                    $tmp['martes'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                } 
            }
            $tmp['miercoles'] = '';
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('miercoles')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('miercoles')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['miercoles'] = 'descanso';
                }else{
                    $tmp['miercoles'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                    $tmp['miercoles'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                } 
            }
             $tmp['jueves'] = '';
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('jueves')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('jueves')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['jueves'] = 'descanso';
                }else{
                    $tmp['jueves'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                    $tmp['jueves'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                }
            }
             $tmp['viernes'] = '';
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('viernes')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('viernes')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['viernes'] = 'descanso';
                }else{
                    $tmp['viernes'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                    $tmp['viernes'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                } 
            }
            $tmp['sabado'] = '';
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('sabado')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('sabado')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['sabado'] = 'descanso';
                }else{
                    $tmp['sabado'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                    $tmp['sabado'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                } 
            }
            $tmp['domingo'] = '';
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('domingo')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($sesion->getIdempleado())->filterByEmpleadohorarioDia('domingo')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['domingo'] = 'descanso';
                }else{
                    $tmp['domingo'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                    $tmp['domingo'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                } 
            }
             

             
             $viewModel = new ViewModel(array(
                 'horario' => $tmp,
                 'successMessages' => $this->flashMessenger()->getSuccessMessages(),
             ));
             $viewModel->setTemplate('empleados/empleados/index_pedicurista');
             return $viewModel;
        }
        
        
        return new ViewModel(array(
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
            'clinicas' => $clinicas,
            'idclinica' => $idclinica,
        ));
    }
    
    public function filterAction(){
        $request = $this->request;
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $array = array();
            
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            
            //Itineramos sobre los empleados
            $empleado = new \Clinicaempleado();
            foreach ($empleados as $empleado){
                //Por cada empleados
                $tmp['clinica'] = $empleado->getClinica()->getClinicaNombre();
                $tmp['nombre'] = $empleado->getEmpleado()->getEmpleadoNombre();
                $tmp['idempleado'] = $empleado->getIdempleado();
                //Su horari
                $tmp['lunes'] = '';
                if(\EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('lunes')->exists()){
                    $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('lunes')->findOne();
                    //¿descansa?
                    if($empleado_horario->getEmpleadohorarioDescanso()){
                        $tmp['lunes'] = 'descanso';
                    }else{
                        $tmp['lunes'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                        $tmp['lunes'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                    }                    
                }
                $tmp['martes'] = '';
                if(\EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('martes')->exists()){
                    $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('martes')->findOne();
                    //¿descansa?
                    if($empleado_horario->getEmpleadohorarioDescanso()){
                        $tmp['martes'] = 'descanso';
                    }else{
                        $tmp['martes'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                        $tmp['martes'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                    } 
                }
                $tmp['miercoles'] = '';
                if(\EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('miercoles')->exists()){
                    $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('miercoles')->findOne();
                    //¿descansa?
                    if($empleado_horario->getEmpleadohorarioDescanso()){
                        $tmp['miercoles'] = 'descanso';
                    }else{
                        $tmp['miercoles'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                        $tmp['miercoles'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                    } 
                }
                 $tmp['jueves'] = '';
                if(\EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('jueves')->exists()){
                    $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('jueves')->findOne();
                    //¿descansa?
                    if($empleado_horario->getEmpleadohorarioDescanso()){
                        $tmp['jueves'] = 'descanso';
                    }else{
                        $tmp['jueves'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                        $tmp['jueves'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                    }
                }
                 $tmp['viernes'] = '';
                if(\EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('viernes')->exists()){
                    $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('viernes')->findOne();
                    //¿descansa?
                    if($empleado_horario->getEmpleadohorarioDescanso()){
                        $tmp['viernes'] = 'descanso';
                    }else{
                        $tmp['viernes'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                        $tmp['viernes'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                    } 
                }
                $tmp['sabado'] = '';
                if(\EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('sabado')->exists()){
                    $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('sabado')->findOne();
                    //¿descansa?
                    if($empleado_horario->getEmpleadohorarioDescanso()){
                        $tmp['sabado'] = 'descanso';
                    }else{
                        $tmp['sabado'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                        $tmp['sabado'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                    } 
                }
                $tmp['domingo'] = '';
                if(\EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('domingo')->exists()){
                    $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia('domingo')->findOne();
                    //¿descansa?
                    if($empleado_horario->getEmpleadohorarioDescanso()){
                        $tmp['domingo'] = 'descanso';
                    }else{
                        $tmp['domingo'].= $empleado_horario->getEmpleadohorarioEntrada('H:i').' - ';
                        $tmp['domingo'].=$empleado_horario->getEmpleadohorarioSalida('H:i');
                    } 
                }

                $array[] = $tmp;

            }

            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => $array)));
            
        }
    }
    
    public function horariosAction(){
        
        $request = $this->request;
        $sesion = new \Shared\Session\AouthSession();
        
        if(in_array($sesion->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        if($request->isPost()){
            $post_data = $request->getPost();
            
            //Guardamos el id del empleado
            $idempleado = $post_data['idempleado'];
            unset($post_data['idempleado']);
            
            //Limpiamos los registros del empleado
            $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->find();
            $empleado_horario->delete();
            
            //Comenzamos a itinerar
            foreach ($post_data as $key => $value){
                $empleado_horario = new \Empleadohorario();
                $empleado_horario->setIdempleado($idempleado);
                $empleado_horario->setEmpleadohorarioDia($key);
                if(isset($value['descanso'])){
                    $empleado_horario->setEmpleadohorarioDescanso(1);
                    $empleado_horario->setEmpleadohorarioEntrada('23:59:59');
                    $empleado_horario->setEmpleadohorarioSalida('23:59:59');
                }else{
                    $empleado_horario->setEmpleadohorarioDescanso(0);
                    $empleado_horario->setEmpleadohorarioEntrada($value['entrada']);
                    $empleado_horario->setEmpleadohorarioSalida($value['salida']);
                }
                $empleado_horario->save();
                
            }
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));
        }
        
        if($this->params()->fromQuery('html')){
            
            $idempleado = $this->params()->fromQuery('idempleado');
           
            //Su horario
            $tmp['lunes'] = '';$tmp['lunes']['entrada']='';$tmp['lunes']['salida']='';$tmp['lunes']['descanso'] = false;
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('lunes')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('lunes')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['lunes']['descanso'] = true;
                }
                $tmp['lunes']['entrada'] = $empleado_horario->getEmpleadohorarioEntrada();
                $tmp['lunes']['salida']=$empleado_horario->getEmpleadohorarioSalida();
            }
            $tmp['martes'] = '';$tmp['martes']['entrada']='';$tmp['martes']['salida']='';$tmp['martes']['descanso'] = false;
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('martes')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('martes')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['martes']['descanso'] = true;
                }
                $tmp['martes']['entrada'] = $empleado_horario->getEmpleadohorarioEntrada();
                $tmp['martes']['salida']=$empleado_horario->getEmpleadohorarioSalida();
            }
            $tmp['miercoles'] = '';$tmp['miercoles']['entrada']='';$tmp['miercoles']['salida']='';$tmp['miercoles']['descanso'] = false;
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('miercoles')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('miercoles')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['miercoles']['descanso'] = true;
                }
                $tmp['miercoles']['entrada'] = $empleado_horario->getEmpleadohorarioEntrada();
                $tmp['miercoles']['salida']=$empleado_horario->getEmpleadohorarioSalida();
            } 
            $tmp['jueves'] = '';$tmp['jueves']['entrada']='';$tmp['jueves']['salida']='';$tmp['jueves']['descanso'] = false;
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('jueves')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('jueves')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['jueves']['descanso'] = true;
                }
                $tmp['jueves']['entrada'] = $empleado_horario->getEmpleadohorarioEntrada();
                $tmp['jueves']['salida']=$empleado_horario->getEmpleadohorarioSalida();
            }
            $tmp['viernes'] = '';$tmp['viernes']['entrada']='';$tmp['viernes']['salida']='';$tmp['viernes']['descanso'] = false;
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('viernes')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('viernes')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['viernes']['descanso'] = true;
                }
                $tmp['viernes']['entrada'] = $empleado_horario->getEmpleadohorarioEntrada();
                $tmp['viernes']['salida']=$empleado_horario->getEmpleadohorarioSalida();
            }
            $tmp['sabado'] = '';$tmp['sabado']['entrada']='';$tmp['sabado']['salida']='';$tmp['sabado']['descanso'] = false;
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('sabado')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('sabado')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['sabado']['descanso'] = true;
                }
                $tmp['sabado']['entrada'] = $empleado_horario->getEmpleadohorarioEntrada();
                $tmp['sabado']['salida']=$empleado_horario->getEmpleadohorarioSalida();
            }
             $tmp['domingo'] = '';$tmp['domingo']['entrada']='';$tmp['domingo']['salida']='';$tmp['domingo']['descanso'] = false;
            if(\EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('domingo')->exists()){
                $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($idempleado)->filterByEmpleadohorarioDia('domingo')->findOne();
                //¿descansa?
                if($empleado_horario->getEmpleadohorarioDescanso()){
                    $tmp['domingo']['descanso'] = true;
                }
                $tmp['domingo']['entrada'] = $empleado_horario->getEmpleadohorarioEntrada();
                $tmp['domingo']['salida']=$empleado_horario->getEmpleadohorarioSalida();
            }
            
            $viewModel = new ViewModel();
            $viewModel->setVariables(array(
                'idempleado' => $idempleado,
                'horario' => $tmp,
            ));
            $viewModel->setTerminal(true);
            return $viewModel;
        }
    }
    
    
}
