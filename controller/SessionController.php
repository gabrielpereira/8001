<?php

require_once(__DIR__."/../model/Administrador.php");
require_once(__DIR__."/../model/Cliente.php");

class SessionController {

    protected function __construct(){
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

    public static function iniciaSessao($papel, $usuario){
        session_start();
        $_SESSION["papel"] = $papel;
        $_SESSION["nome"] = $usuario->nome;
        $_SESSION["hashSenha"] = $usuario->senha;
        $_SESSION["cpf"] = $usuario->cpf;
        $_SESSION["last-access"] = time();
    }

    public static function encerrarSessao(){
        session_unset();
    }

}