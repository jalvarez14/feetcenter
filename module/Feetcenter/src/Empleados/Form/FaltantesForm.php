<?php

namespace Empleados\Form;

use Zend\Form\Form;

class FaltantesForm extends Form
{
    public function __construct($clinicas,$empleados)
    {
        // we want to ignore the name passed
        parent::__construct('FaltantesForm');
        $this->setAttribute('method', 'post');

        
  
        $this->add(array(
            'name' => 'faltante_fecha',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'faltante_hora',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
                'placeholder' => '19:00',
                'class' => 'pickertime width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'faltante_cantidad',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'faltante_comentario',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => false,
            ),
        ));
        
        $this->add(array(
            'name' => 'faltante_comprobante',
            'type' => 'File',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'faltante_comprobantefirmado',
            'type' => 'File',
            'attributes' => array(
                'class' => 'width-100',
                'accept' => 'application/pdf'
            ),
        ));
        
    }
}