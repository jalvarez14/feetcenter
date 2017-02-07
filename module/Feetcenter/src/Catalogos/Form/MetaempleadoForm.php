<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class MetaempleadoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('metaempleadoForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'metaempleado_meta', 
           'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'metaempleado_anio',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));

        $this->add(array(
            'name' => 'metaempleado_mes',
            'type' => 'Select',
            'options' => array(
                'value_options' => array(
                        '1' => 'Enero',
                        '2' => 'Febrero',
                        '3' => 'Marzo',
                        '4' => 'Abril',
                        '5' => 'Mayo',
                        '6' => 'Junio',
                        '7' => 'Julio',
                        '8' => 'Agosto',
                        '9' => 'Septiembre',
                        '10' => 'Octubre',
                        '11' => 'Noviembre',
                        '12' => 'Diciembre',   
                ),
                ),
            'attributes' => array(
                'class' => 'width-100',
                
            ),
        ));
 
    }
}