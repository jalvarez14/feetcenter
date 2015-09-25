<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class EmpleadoForm extends Form
{
    public function __construct(array $roles)
    {
        // we want to ignore the name passed
        parent::__construct('EmpleadoForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'empleado_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_nss',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_rfc',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_calle',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_numero',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_colonia',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_ciudad',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_codigopostal',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
             'type' => 'Select',
             'name' => 'empleado_sexo',
             'options' => array(
                'value_options' => array(
                        'Hombre' => 'Hombre',
                        'Mujer' => 'Mujer',
                ),
             ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_fechanacimiento',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_telefono',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        
        $this->add(array(
            'name' => 'empleado_celular',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_comprobantedomiclio',
            'type' => 'File',
            'attributes' => array(
                'class' => 'width-100',
                'accept'=>"image/*"
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_comprobanteidentificacion',
            'type' => 'File',
            'attributes' => array(
                'class' => 'width-100',
                'accept'=>  "image/*"
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_sueldo',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
//        $this->add(array(
//             'type' => 'Select',
//             'name' => 'empleado_diadescanso',
//             'options' => array(
//                'value_options' => array(
//                        'lunes' => 'Lunes',
//                        'martes' => 'Martes',
//                        'miercoles' => 'Miercoles',
//                        'jueves' => 'Jueves',
//                        'viernes' => 'Viernes',
//                        'sabado' => 'Sabado',
//                        'domingo' => 'Domingo',
//                ),
//             ),
//            'attributes' => array(
//                'class' => 'width-100',
//            ),
//        ));
        
        $this->add(array(
            'name' => 'empleado_username',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_password',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
 
    }
}