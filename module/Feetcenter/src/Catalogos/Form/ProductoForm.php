<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class ProductoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('ProductoForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'producto_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'producto_descripcion',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'producto_costo',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'producto_precio',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
       $this->add(array(
            'name' => 'producto_comision',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));


 
    }
}