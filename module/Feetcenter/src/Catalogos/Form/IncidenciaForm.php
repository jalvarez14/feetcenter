<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class IncidenciaForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('incidenciaForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'conceptoincidencia_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'conceptoincidencia_descripcion',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));

 
    }
}