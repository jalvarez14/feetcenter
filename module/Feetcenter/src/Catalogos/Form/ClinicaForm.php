<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class ClinicaForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('clinicaForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'clinica_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'clinica_direccion',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'clinica_registropatronal',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));

        $this->add(array(
            'name' => 'clinica_telefono',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
 
    }
}