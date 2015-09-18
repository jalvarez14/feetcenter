<?php 

namespace Shared\Session;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;


class AouthSession extends AbstractActionController {

    /**
     * 
     * @param array $session
     * @param type $expirationTime
     */
    public function Create( array $session=null) {
            $session["idempleadoacceso"] = array_key_exists( "idempleadoacceso", $session ) ? $session["idempleadoacceso"] : null;
            $session["idempleado"] = array_key_exists( "idempleado", $session ) ? $session["idempleado"] : null;
            $session["idclinica"] = array_key_exists( "idclinica", $session ) ? $session["idclinica"] : null;
            $session["idrol"] = array_key_exists( "idrol", $session ) ? $session["idrol"] : null;
            $session["empleadoacceso_username"] = array_key_exists("empleadoacceso_username", $session ) ? $session["empleadoacceso_username"] : null;
            $session["empleado_nombre"] = array_key_exists( "empleado_nombre", $session ) ? $session["empleado_nombre"] : null;
            $session["empleado_foto"] =  (array_key_exists("empleado_foto", $session ) && !is_null($session["empleado_foto"])) ? $session["empleado_foto"] : '/img/empleados/default.jpg';

            $session_data = new Container('session_data');
            $session_data->idempleadoacceso           = $session["idempleadoacceso"];
            $session_data->idclinica            = $session["idclinica"];
            $session_data->idempleado           = $session["idempleado"];
            $session_data->idrol                = $session["idrol"];
            $session_data->empleadoacceso_username      = $session["empleadoacceso_username"];
            $session_data->empleado_nombre      = $session["empleado_nombre"];
            $session_data->empleado_foto        = $session["empleado_foto"];

    }
    
    /**
     * 
     * @return boolean
     */
    public function Close() {
        
        $session_data = new Container('session_data');
        $session_data->idempleadoacceso     = null;
        $session_data->idclinica            = null;
        $session_data->idempleado           = null;
        $session_data->idrol                = null;
        $session_data->empleado_nombre      = null;
        $session_data->empleado_foto        = null;

        $session_data->getManager()->getStorage()->clear('session_data');
        
        return true;  
    }
    
    /**
     * 
     * @return boolean
     */
    public function isActive() {    
        $session_data = new Container('session_data');
        if( $session_data->idempleado != null){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 
     * @return array
     */
    public function getData() {
        $session_data = new Container('session_data');
        
        return array(
            "idempleadoacceso"    => $session_data->idempleadoacceso,
            "idempleado"    => $session_data->idempleado,
            "idclinica"    => $session_data->idclinica,
            "idrol"        => $session_data->idrol,
            "empleadoacceso_username"    => $session_data->empleadoacceso_username,
            "empleado_nombre"    => $session_data->empleado_nombre,
            "empleado_foto"    => $session_data->empleado_foto,

        );
    }
    
    /**
     * 
     * @return string
     */
    public static function getIdClinica(){
        $session_data = new Container('session_data');
        return $session_data->idclinica;
    }
    
    /**
     * 
     * @return string
     */
    public static function getIdempleadoacceso(){
        $session_data = new Container('session_data');
        return $session_data->idempleadoacceso;
    }
    
    /**
     * 
     * @return string
     */
    public static function getIdempleado(){
        $session_data = new Container('session_data');
        return $session_data->idempleado;
    }
    
    /**
     * 
     * @return string
     */
    public static function getIdrol( ) {
        $session_data = new Container('session_data');
        return $session_data->idrol;
    }
    
    /**
     * 
     * @return string
     */
    public static function getEmpleadoUsername( ) {
        $session_data = new Container('session_data');
        return $session_data->empleadoacceso_username;
    }
    
    /**
     * 
     * @return string
     */
    public static function getEmpleadoNombre() {
        $session_data = new Container('session_data');
        return $session_data->empleado_nombre;
    }
    
    /**
     * 
     * @return string
     */
    public static function getEmpleadoFoto( ) {
        $session_data = new Container('session_data');
        return $session_data->empleado_foto;
    }
 
}
?>