<?php

namespace Pacientes\Form;

use Zend\Form\Form;

class SeguimientoForm extends Form
{
    public function __construct(array $canales, array $estatus)
    {
        // we want to ignore the name passed
        parent::__construct('seguimientoForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idpaciente',
            'type' => 'Hidden',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'idcanalcomunicacion',
             'options' => array(
                'value_options' => $canales
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'idestatusseguimiento',
             'options' => array(
                'value_options' => $estatus,
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'pacienteseguimiento_fecha',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'pacienteseguimiento_hora',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'pacienteseguimiento_comentario',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));

 
    }
}