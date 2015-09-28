<?php

namespace Empleados\Form;

use Zend\Form\Form;

class ReporteForm extends Form
{
    public function __construct($clinicas,$conceptos,$empleados)
    {
        // we want to ignore the name passed
        parent::__construct('reporteForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'idclinica',
             'options' => array(
                'value_options' => $clinicas
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'idempleadoreportado',
             'options' => array(
                'value_options' => $empleados,
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'idconceptoincidencia',
             'options' => array(
                'value_options' => $conceptos,
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleadoreporte_fechasuceso',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'empleadoreporte_comentario',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));

 
    }
}