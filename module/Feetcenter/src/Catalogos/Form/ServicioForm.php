<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class ServicioForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('ServicioForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'servicio_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'servicio_descripcion',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Radio',
            'name' => 'servicio_dependencia',
            'options' => array(
                'value_options' => array(
                    'ninguno'   => 'Ninguno',
                    'membresia' => 'Membresía',
                    'cupon'     => 'Cupon',
                ),
                
            ),
            'attributes' => array(
                'value' => 'ninguno',
            ),
            
        ));
        

        $this->add(array(
            'name' => 'servicio_comision',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));


    }
}