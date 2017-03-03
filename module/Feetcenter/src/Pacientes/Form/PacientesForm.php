<?php

namespace Pacientes\Form;

use Zend\Form\Form;

class PacientesForm extends Form
{
    public function __construct($clinicas, $empleados)
    {
        
        
        // we want to ignore the name passed
        parent::__construct('pacientesForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'idclinica',
             'options' => array(
                'value_options' => $clinicas
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'idempleado',
             'options' => array(
                'value_options' => $empleados
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'paciente_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => false,
                'disabled' => true,
            ),
        ));
        $this->add(array(
            'name' => 'paciente_name',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        $this->add(array(
            'name' => 'paciente_ap',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        $this->add(array(
            'name' => 'paciente_am',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'paciente_celular',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'paciente_telefono',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'paciente_calle',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'paciente_numero',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'paciente_colonia',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'paciente_codigopostal',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'paciente_ciudad',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'paciente_estado',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'paciente_sexo',
             'options' => array(
                'value_options' => array(
                    'Mujer' => 'Mujer',
                    'Hombre' => 'Hombre',
                        
                ),
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'paciente_fechanacimiento',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        

 
    }
}