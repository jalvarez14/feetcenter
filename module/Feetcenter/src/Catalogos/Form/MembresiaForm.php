<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class MembresiaForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('membresiaForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'membresia_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'membresia_descripcion',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'membresia_servicios',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'membresia_cupones',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'membresia_precio',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
    }
}