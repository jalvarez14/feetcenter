<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class ConceptoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('conceptoForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'concepto_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'concepto_descripcion',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));

 
    }
}