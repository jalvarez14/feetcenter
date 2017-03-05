<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Inventario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TransferenciasController extends AbstractActionController
{
    
    public function filterbydateAction(){
        
        if($this->params()->fromQuery()){
            $from = new \DateTime($this->params()->fromQuery('from'));
            $to = new \DateTime($this->params()->fromQuery('to'));
            //->joinClinicaRelatedByIdclinicaremitente()->withColumn('clinica_nombre','clinica_remitente')
            $trasnferencias = \TransferenciaQuery::create()->joinEmpleadoRelatedByIdempleadoreceptor()->withColumn('empleado_nombre','empleado_receptor')->filterByTransferenciaFechamovimiento(array('min' => $from->format('Y-m-d'), 'max' => $to->format('Y-m-d')))->find();
            
            //Hacemos el join de clinicas
            $value = new \Transferencia();
            $trasnferencias_array = array();
            foreach ($trasnferencias as $key => $value){
                $tmp = $value->toArray(\BasePeer::TYPE_FIELDNAME);
                $clinica_remitente = $value->getClinicaRelatedByIdclinicaremitente()->getClinicaNombre();
                $clinica_destinatarios = $value->getClinicaRelatedByIdclinicadestinataria()->getClinicaNombre();
                $tmp['clinica_remitente'] = $clinica_remitente;
                $tmp['clinica_destinatario'] = $clinica_destinatarios;
                $trasnferencias_array[] = $tmp;
            }
            
            return $this->getResponse()->setContent(json_encode($trasnferencias_array));

        }
        
    }


    public function indexAction()
    {
        $sesion = new \Shared\Session\AouthSession();
        
        if($sesion->getIdrol() == 1){
            $collection = \TransferenciaQuery::create()->orderBy('idtransferencia', 'desc')->find();
        }else{
             $collection = \TransferenciaQuery::create()->filterByIdclinicaremitente($sesion->getIdClinica())->addOr('idclinicadestinataria',$sesion->getIdClinica())->orderBy('idtransferencia', 'desc')->find();
        }
        
       
        return new ViewModel(array(
            'collection' => $collection,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
    }
    
    public function nuevoAction(){
        
        $request = $this->request;

        $sesion = new \Shared\Session\AouthSession();
        
        if(in_array($sesion->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            
            //Creamos la transferencia
            $transferencia = new \Transferencia();
            $transferencia->setIdempleado($sesion->getIdempleado())
                          ->setIdclinicaremitente($post_data['idclinicaremitente'])
                          ->setIdclinicadestinataria($post_data['idclinicadestinataria'])
                          ->setTransferenciaCreadaen(new \DateTime)
                          ->setTransferenciaEstatus('enviada')
                          ->setTransferenciaFechamovimiento(new \DateTime)
                          ->save();
            
            
            //Ahora los detalles
            
            //Productos
            if(isset($post_data['producto'])){
                foreach ($post_data['producto'] as $key => $value){
                    $transferencia_detalle = new \Transferenciadetalle();
                    $transferencia_detalle->setIdtransferencia($transferencia->getIdtransferencia())
                                          ->setIdproductoclinica($key)
                                          ->setTransferenciadetalleCantidad($value)
                                          ->save();
                    
                    //Restamos de producto_clinica
                    $producto_clinica = \ProductoclinicaQuery::create()->findPk($key);
                    $existencia_actual = $producto_clinica->getProductoclinicaExistencia();
                    $nueva_existencia = $existencia_actual - $value;
                    $producto_clinica->setProductoclinicaExistencia($nueva_existencia)
                                    ->save();
                }
            }
            
            //Insumos
            if(isset($post_data['insumo'])){
                foreach ($post_data['insumo'] as $key => $value){
                    $transferencia_detalle = new \Transferenciadetalle();
                    $transferencia_detalle->setIdtransferencia($transferencia->getIdtransferencia())
                                          ->setIdinsumoclinica($key)
                                          ->setTransferenciadetalleCantidad($value)
                                          ->save();
                    
                    //Restamos de insumoclinica
                    $insumo_clinica = \InsumoclinicaQuery::create()->findPk($key);
                    $existencia_actual = $insumo_clinica->getInsumoclinicaExistencia();
                    $nueva_existencia = $existencia_actual - $value;
                    $insumo_clinica->setInsumoclinicaExistencia($nueva_existencia)
                                    ->save();
                }
            }
            
            //Generamos el pdf
            $target = "comprobante_transferencia_".$transferencia->getIdtransferencia().".pdf";
            
            $pdf = new \Shared\PdfCreator\comprobanteTransferencia($transferencia);
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->FancyTable();
               
            $pdf->Output($_SERVER['DOCUMENT_ROOT'].'/img/transferencias/'.$target,'F');
            
            $transferencia->setTransferenciaComprobante('/img/transferencias/'.$target);
            $transferencia->save();
            
            //Actualizamos la sesion
            $sesion->updateNotifications();
            
            $this->flashMessenger()->addSuccessMessage('Transferencia enviada!');
            return $this->redirect()->toRoute('inventario/transferencias');

        }

        //General
        $clinicasdestino =  $clinicasremitentes = \ClinicaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        //Administrador
        if($sesion->getIdrol() == 1){
            $clinicasremitentes = \ClinicaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        }else{
           $clinicasremitentes = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        }

        return new ViewModel(array(
            'clinicasremitentes' => $clinicasremitentes,
            'clinicasdestino' => $clinicasdestino,
        ));
        
        
    }
    
    public function getcatalogoAction(){
        
        if($this->params()->fromQuery('idclinica')){
            
            $idclinica = $this->params()->fromQuery('idclinica');
            $catalogo = array();
            //Los productos
            $productoclinica = \ProductoclinicaQuery::create()->filterByIdclinica($idclinica)->joinProducto()->withColumn('producto_nombre')->withColumn('SUM(productoclinica_existencia)','total_existencias')->groupBy('idproducto')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            $catalogo['productos'] = $productoclinica;
            //Los insumos
            $insumoclinica = \InsumoclinicaQuery::create()->filterByIdclinica($idclinica)->joinInsumo()->withColumn('insumo_nombre')->withColumn('SUM(insumoclinica_existencia)','total_existencias')->groupBy('idinsumo')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            $catalogo['insumos'] = $insumoclinica;
            
            
            
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode($catalogo));
        }
        
    }
    
    public function cambiarstatusAction(){
        
        $request = $this->request;
        $sesion = new \Shared\Session\AouthSession();
        
        if(in_array($sesion->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $transferencia = \TransferenciaQuery::create()->findPk($post_data['id']);
            $transferencia->setTransferenciaEstatus($post_data['transferencia_estatus']);
            $transferencia->setIdempleadoreceptor($sesion->getIdempleado());
            
            if($post_data['transferencia_estatus'] == 'rechazada' || $post_data['transferencia_estatus'] == 'cancelada' ){
                
                //Actualizamos session
                $transferencia_pendientes = (int)$sesion->getTransferenciasPendientes();
                $sesion->setTransferenciasPendientes($transferencia_pendientes - 1);
                
                //Agregamos la nota
                $transferencia->setTransferenciaNota($post_data['transferencia_nota']);
                //Regresamos los items a la clinica remitente
                $transferencia_detalles = $transferencia->getTransferenciadetalles();
                
                //Comenzamos a itinerar
                
                foreach ($transferencia_detalles as $detalle){
                    //Es producto
                    if(!is_null($detalle->getIdproductoclinica())){
                        
                        $producto_clinica = $detalle->getProductoclinica();
                        $existencia_actual = $producto_clinica->getProductoclinicaExistencia();
                        $existencia_nueva = $existencia_actual + $detalle->getTransferenciadetalleCantidad();
                        $producto_clinica->setProductoclinicaExistencia($existencia_nueva);
                        $producto_clinica->save();
                        
                    }else{//Es insumo
                        
                        $insumo_clinica = $detalle->getInsumoclinica();
                        $existencia_actual = $insumo_clinica->getInsumoclinicaExistencia();
                        $existencia_nueva = $existencia_actual + $detalle->getTransferenciadetalleCantidad();
                        $insumo_clinica->setInsumoclinicaExistencia($existencia_nueva);
                        $insumo_clinica->save();
                        
                    }
                }

            }elseif($post_data['transferencia_estatus'] == 'aceptada'){
                
                //Actualizamos session
                $transferencia_pendientes = (int)$sesion->getTransferenciasPendientes();
                $sesion->setTransferenciasPendientes($transferencia_pendientes - 1);
                
                //Modificamos la fecha de movimientos
                $transferencia->setTransferenciaFechamovimiento(new \DateTime());
                
                //Sumamos los items a la clinica destino
                $transferencia_detalles = $transferencia->getTransferenciadetalles();
                
                foreach ($transferencia_detalles as $detalle){
                    //Es producto
                    if(!is_null($detalle->getIdproductoclinica())){
                        
                        $producto_clinica = $detalle->getProductoclinica();
                        $producto = $producto_clinica->getProducto();
                        $producto_clinica_destino = \ProductoclinicaQuery::create()->filterByIdproducto($producto->getIdproducto())->filterByIdclinica($transferencia->getIdclinicadestinataria())->findOne();
                        $existencia_actual = $producto_clinica_destino->getProductoclinicaExistencia();
                        $existencia_nueva = $existencia_actual + $detalle->getTransferenciadetalleCantidad();
                        $producto_clinica_destino->setProductoclinicaExistencia($existencia_nueva);
                        $producto_clinica_destino->save();
                        
                    }else{ //Es insumo
                        $insumo_clinica = $detalle->getInsumoclinica();
                        $insumo = $insumo_clinica->getInsumo();
                        $insumo_clinica_destino = \InsumoclinicaQuery::create()->filterByIdinsumo($insumo->getIdinsumo())->filterByIdclinica($transferencia->getIdclinicadestinataria())->findOne();
                        $existencia_actual = $insumo_clinica_destino->getInsumoclinicaExistencia();
                        $existencia_nueva = $existencia_actual + $detalle->getTransferenciadetalleCantidad();
                        $insumo_clinica_destino->setInsumoclinicaExistencia($existencia_nueva);
                        $insumo_clinica_destino->save();
                    }
                }
                
            }
           
              
            $transferencia->save();
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            $sesion->updateNotifications();
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));
        }
        
        if($this->params()->fromQuery('html')){
            
            $sesion = new \Shared\Session\AouthSession();
            $id = $this->params()->fromQuery('id');
            
            $status = array(
                'enviada' => 'Enviada',
                'aceptada' => 'Aceptada',
                'rechazada' => 'Rechazada',
                'cancelada' => 'Cancelada',
            );
            
            $transferencia = \TransferenciaQuery::create()->findPk($id)->toArray(\BasePeer::TYPE_FIELDNAME);
            
            //Encargados opciones
            if($sesion->getIdrol() == 2){ //Es encargado
                //ES REMITENTE
                if($transferencia['idclinicaremitente'] == $sesion->getIdClinica()){
                    unset($status['aceptada']);
                    unset($status['rechazada']);
                }elseif ($transferencia['idclinicadestinataria'] == $sesion->getIdClinica()) {
                    unset($status['cancelada']);
                }
            }
            
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('status', $status);
            $viewModel->setVariable('transferencia', $transferencia);
            return $viewModel;
        }
        
    }
    
    public function verdetalleAction(){
        if($this->params()->fromQuery('html')){
            
            $id = $this->params()->fromQuery('id');
            $transferencia = \TransferenciaQuery::create()->findPk($id);
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('transferencia', $transferencia);
            return $viewModel;
            
        }
    }
    
    public function vernotaAction(){

        $id = $this->params()->fromQuery('id');
        $transferencia = \TransferenciaQuery::create()->findPk($id);
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setVariable('transferencia', $transferencia);
        return $viewModel;

    }
    
    
}
