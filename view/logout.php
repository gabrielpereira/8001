<?php
/**
 * Created by PhpStorm.
 * User: Renard
 * Date: 12/06/2016
 * Time: 19:01
 */

session_start();

require_once("../controller/AdministradorController.php");
require_once("../controller/ClienteController.php");

if(isset($_SESSION["papel"])){

    if($_SESSION["papel"] == "Administrador"){
        $adminController = AdministradorController::getInstance();
        $adminController->deslogaAdministrador();
    }else if($_SESSION["papel"] == "Cliente"){
        //toDo
    }
}

header('Location: ../index.php');

