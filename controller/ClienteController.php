<?php

require_once(__DIR__."/../data-access/ClienteDAO.php");
require_once(__DIR__."/../model/Cliente.php");



class ClienteController{
    private static $ClienteDAO;

    protected function __construct(){
        self::$ClienteDAO = new ClienteDAO();
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

    public function getClientePor($ordenacao){
        return self::$ClienteDAO->getCliente($ordenacao);
    }
	
	  public function getClientePor2($ordenacao){
        return self::$ClienteDAO->getCliente2($ordenacao);
    }
    public function inserirCliente($cod, $nome, $cidade, $posicao_global){
        $local = new Cliente(array($cod, $nome, $cidade, $posicao_global));
        self::$ClienteDAO->inserirCliente($local);
    }


    public function getCliente(){
        return self::$ClienteDAO->getCliente();
    }

    public function validaCliente($cpf, $hSenha){
        $Cliente = self::$ClienteDAO->getCliente($cpf);
        if($Cliente == NULL) return FALSE;
            SessionController::iniciaSessao("Cliente",$Cliente);
            return array("sucesso" => "Usuário carregado com sucesso", "usuario" => $Cliente);
        
    }

    public function deslogaCliente(){
        SessionController::encerrarSessao();
    }
}