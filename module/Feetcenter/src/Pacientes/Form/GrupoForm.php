<?php

namespace Pacientes\Form;

use Zend\Form\Form;

class GrupoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('insumosForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'grupo_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'grupo_descripcion',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));

 
    }
}