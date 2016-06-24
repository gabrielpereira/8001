<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
require_once(__DIR__."/../data-access/AnoDAO.php");
require_once(__DIR__."/../model/Ano.php");



class AnoController{
    private static $AnoDAO;

    protected function __construct(){
        self::$AnoDAO = new AnoDAO();
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

    public function getAnoPor($ordenacao){
        return self::$AnoDAO->getAno($ordenacao);
    }
    public function inserirAno($cod, $nome, $cidade, $posicao_global){
        $local = new Ano(array($cod, $nome, $cidade, $posicao_global));
        self::$AnoDAO->inserirAno($local);
    }

}