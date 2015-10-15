<?php

namespace Agenda\Form;

use Zend\Form\Form;

class EventoForm extends Form
{
    public function __construct($idempleadocreador,$idclinica,$idempleado,$visita_creadaen,$visita_fechainicio,$visita_fechafin)
    {
        // we want to ignore the name passed
        parent::__construct('eventoForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idvisita',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'idclinica',
            'type' => 'Hidden',
            'attributes' => array(
                 'value' => $idclinica
            ),
        ));
        
        $this->add(array(
            'name' => 'idempleado',
            'type' => 'Hidden',
            'attributes' => array(
                 'value' => $idempleado
            ),
        ));
        
        $this->add(array(
            'name' => 'idempleadocreador',
            'type' => 'Hidden',
            'attributes' => array(
                 'value' => $idempleadocreador
            ),
        ));
        
        $this->add(array(
            'name' => 'visita_creadaen',
            'type' => 'Hidden',
            'attributes' => array(
                 'value' => $visita_creadaen
            ),
        ));
        
        $this->add(array(
            'name' => 'visita_fechainicio',
            'type' => 'Hidden',
            'attributes' => array(
                 'value' => $visita_fechainicio
            ),
            
        ));
        
        $this->add(array(
            'name' => 'visita_fechafin',
            'type' => 'Hidden',
            'attributes' => array(
                 'value' => $visita_fechafin
            ),
            
        ));
        
        $this->add(array(
            'name' => 'idpaciente',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'visita_tipo',
             'options' => array(
                'value_options' => array(
                        'consulta' => 'Consulta',
                        'servicio' => 'Servicio',
                ),
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'visita_estatuspago',
             'options' => array(
                'value_options' => array(
                        'pagada' => 'Pagada',
                        'no pagada' => 'No pagada',
                ),
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        
        $this->add(array(
            'name' => 'visita_total',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => false,
            ),
        ));
        

 
    }
}