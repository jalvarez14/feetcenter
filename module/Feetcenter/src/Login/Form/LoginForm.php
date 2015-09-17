<?php

namespace Login\Form;

use Zend\Form\Form;

class LoginForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('Login');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'empleadoacceso_username',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'empleadoacceso_password',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
 
    }
}