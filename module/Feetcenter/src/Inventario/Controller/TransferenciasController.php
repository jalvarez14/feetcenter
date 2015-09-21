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
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
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
}
