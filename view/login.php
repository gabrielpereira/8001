<?php

require_once("../controller/AdministradorController.php");
require_once("../controller/ClienteController.php");

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$papel = $_POST['papel'];

if($papel == "Administrador"){
    $adminController = AdministradorController::getInstance();
    echo json_encode($adminController->validaAdministrador($cpf,$senha));
}

/*$adminControl = AdministradorController::getInstance();
$administradores = $adminControl->getAdministradores();
foreach($administradores as $administrador){
    print_r($administrador);
}*/