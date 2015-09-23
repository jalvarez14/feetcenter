<?php

namespace Egresos\Form;

use Zend\Form\Form;

class EgresoForm extends Form
{
    public function __construct($clinicas)
    {
        // we want to ignore the name passed
        parent::__construct('egresoForm');
        $this->setAttribute('method', 'post');
        
         $this->add(array(
             'type' => 'Select',
             'name' => 'idclinica',
             'options' => array(
                'value_options' => $clinicas,
             ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));

        $this->add(array(
            'name' => 'egresoclinica_fechaegreso',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'egresoclinica_tipo',
             'options' => array(
                'value_options' => array(
                    'recoleccion' => 'Recoleccion',
                    'otro' => 'Otro',
                ),
             ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'egresoclinica_cantidad',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'egresoclinica_iva',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'egresoclinica_comprobante',
            'type' => 'File',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'egresoclinica_nota',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
    }
}