<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class ProveedorForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('proveedorForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'proveedor_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_rfc',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_telefono',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_celular',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_contacto',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_direccion',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_codigopostal',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_ciudad',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_estado',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_email',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));

 
    }
}