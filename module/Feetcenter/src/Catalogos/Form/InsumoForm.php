<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class InsumoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('insumosForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'insumo_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'insumo_descripcion',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'insumo_costo',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));

 
    }
}