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

    public function query($query){
        $dbuser = $_POST["cpf"];
        $dbpass = md5($_POST['pass']);

        if(DataAccessObject::$sgbd=="mysql"){
            $pdo = new PDO('mysql:host='.DataAccessObject::$dbhost.';dbname='.DataAccessObject::$dbname,
                $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        }else if(DataAccessObject::$sgbd=="postgres"){
            $pdo = new PDO('pgsql:host='.DataAccessObject::$dbhost.' dbname='.DataAccessObject::$dbname.'user='.$dbuser.'password='.$dbpass);
        }
        return $pdo->query($query);
    }

}