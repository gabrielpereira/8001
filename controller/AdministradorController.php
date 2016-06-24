<?php
require_once(__DIR__."/../data-access/AdministradorDAO.php");
require_once("SessionController.php");


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

    public function validaAdministrador($cpf, $hashSenha){
        $administrador = self::$administradorDAO->getAdministrador($cpf);
        if($administrador == NULL) return FALSE;
        if($administrador->senha != '190b46dbb12e4f67537fb76fc1ca4640'){
            return array("erro" => "Falha de autenticação.");
        }else{
            SessionController::iniciaSessao("Administrador",$administrador);
            return array("sucesso" => "Usuário carregado com sucesso", "usuario" => $administrador);
        }
    }

    public function deslogaAdministrador(){
        SessionController::encerrarSessao();
    }


}