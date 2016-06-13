<?php
/**
 * Created by PhpStorm.
 * User: Renard
 * Date: 11/06/2016
 * Time: 18:00
 */


abstract class DataAccessObject {
    private static $sgbd = "mysql";
    private static $dbhost = "localhost";
    private static $dbname = "8001";

    public function retrieve($preparedQuery,$parameters){
        $PDOStatement = $this->prepareStatement($preparedQuery);
        $PDOStatement->execute($parameters);
        return $PDOStatement->fetchAll();
    }

    public function save($preparedQuery,$parameters){
        return $this->modifyData($preparedQuery,$parameters);
    }
    public function insert($preparedQuery,$parameters){
        return $this->modifyData($preparedQuery,$parameters);
    }
    public function update($preparedQuery,$parameters){
        return $this->modifyData($preparedQuery,$parameters);
    }
    public function delete($preparedQuery,$parameters){
        return $this->modifyData($preparedQuery,$parameters);
    }

    protected function modifyData($preparedQuery,$parameters){
        $PDOStatement = $this->prepareStatement($preparedQuery);
        return $PDOStatement->execute($parameters); //SUCCESS ? TRUE OR FALSE
    }

    protected function prepareStatement($preparedQuery){
        if(isset($_SESSION["cpf"])){
            $_POST["cpf"] = $_SESSION["cpf"];
            $_POST["hashSenha"] = $_SESSION["hashSenha"];
        }

        $dbuser = $_POST["cpf"];
        $dbpass = $_POST["hashSenha"];
        try {
            $pdo = new PDO('mysql:host=' . DataAccessObject::$dbhost . ';dbname=' . DataAccessObject::$dbname,
                $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        }catch(PDOException $e){
            echo json_encode(array("erro" => "PDOException", $e->getMessage() => $e->__toString()));
            exit;
        }
        $statement = $pdo->prepare($preparedQuery);
        return $statement;
    }



}