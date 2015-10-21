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
        
        $this->add(array(
            'name' => 'servicio_comision',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'disabled' => 'true',
            ),
        ));
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Radio',
            'name' => 'servicio_generaingreso',
            'options' => array(
                'value_options' => array(
                    1   => 'Si',
                    0   => 'No',
                ),
            ),
            'attributes' => array(
                'value' => 1,
            ),
            
        ));
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Radio',
            'name' => 'servicio_generacomision',
            'options' => array(
                'value_options' => array(
                    1   => 'Si',
                    0   => 'No',
                ),
            ),
            'attributes' => array(
                'value' => 0,
            ),
            
        ));
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'servicio_tipocomision',
             'options' => array(
                'value_options' => array(
                    'porcentaje' => 'Porcentaje',
                    'cantidad' => 'Cantidad',
                ),
             ),
            'attributes' => array(
                'class' => 'width-100',
                'disabled' => 'true',
            ),
        ));

 
    }
}