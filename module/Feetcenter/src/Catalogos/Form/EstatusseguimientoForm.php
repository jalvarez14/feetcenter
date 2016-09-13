<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class EstatusseguimientoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('EstatusseguimientoForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'estatusseguimiento_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'estatusseguimiento_color',
            'type' => 'Zend\Form\Element\Color',
            'attributes' => array(
                //'class' => 'width-100',
                'required' => true,
            ),
        ));

 
    }
}