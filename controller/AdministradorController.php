<?php
require_once("/data-access/AdministradorDAO.php");
/**
 * Created by PhpStorm.
 * User: Renard
 * Date: 11/06/2016
 * Time: 18:41
 */

class AdministradorController {
    private static $administradorDAO;

    protected function __construct(){
        self::$administradorDAO = new AdministradorDAO();
    }

    public static function getInstance(){
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    private function __clone(){
    }

    public function getAdministradores(){
        return self::$administradorDAO->getAdministradores();
    }

    public function validaAdministrador($cpf, $senha){
        $administrador = self::$administradorDAO->getAdministrador($cpf);
        if($administrador == NULL) return FALSE;
        return ($administrador->$senha == MD5($senha) ? TRUE : FALSE);
    }


}