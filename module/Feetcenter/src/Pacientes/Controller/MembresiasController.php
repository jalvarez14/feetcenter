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

class MembresiasController extends AbstractActionController
{
    
    public function filterAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $membresia = new \Pacientemembresia();
            $membresias_array = array();
            $membresias = \PacientemembresiaQuery::create()->joinMembresia()->withColumn('membresia_cupones')->withColumn('membresia_servicios')->joinPaciente()->withColumn('paciente_nombre')->joinClinica()->withColumn('clinica_nombre')->filterByIdclinica($post_data['clinicas'])->filterByPacientemembresiaEstatus($post_data['status'])->find();
            foreach($membresias as $membresia){
                $tmp = $membresia->toArray(\BasePeer::TYPE_FIELDNAME);
                $tmp['detalles'] = array();
                $detalles = \PacientemembresiadetalleQuery::create()->filterByIdpacientemembresia($membresia->getIdpacientemembresia())->orderBy('pacientemembresiadetalle_fecha', \Criteria::DESC)->find();
                $detalle = new \Pacientemembresiadetalle();
                foreach ($detalles as $detalle){
                     $tmp2 = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                     $tmp2['tipo'] = $detalle->getVisitadetalle()->getServicioclinica()->getServicio()->getServicioDependencia();
                     $tmp['detalles'][] = $tmp2;
                }
            
                $membresias_array[] = $tmp;
            }
            
            
            return $this->getResponse()->setContent(json_encode($membresias_array));
        }
       
    }
    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();

        //Las clinicas
        $clinicas = \ClinicaQuery::create()->find();
        
        $max_servicios = (INT) \MembresiaQuery::create()->select('membresia_servicios')->orderBy('membresia_servicios', \Criteria::DESC)->findOne();
        $max_cupones = (INT) \MembresiaQuery::create()->select('membresia_cupones')->orderBy('membresia_cupones', \Criteria::DESC)->findOne();
        
        //El % de las columnas
        $width_servicios = 100/$max_servicios;
        $width_cupones = 100/$max_cupones;
        
        return new ViewModel(array(
            'clinicas' => $clinicas,
            'session' => $session->getData(),
            'max_servicios' => $max_servicios,
            'max_cupones' => $max_cupones,
            'width_servicios' => $width_servicios,
            'width_cupones' => $width_cupones
        ));
    }
}
