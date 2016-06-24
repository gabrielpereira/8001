<?php


session_start();

require_once("../controller/AdministradorController.php");
require_once("../controller/ClienteController.php");

if(isset($_SESSION["papel"])){

    if($_SESSION["papel"] == "Administrador"){
        $adminController = AdministradorController::getInstance();
        $adminController->deslogaAdministrador();
    }
	
}

header('Location: ../index.php');

