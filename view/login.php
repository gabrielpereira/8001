<?php

require_once("/controller/AdministradorController.php");
require_once("/controller/ClienteController.php");

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$papel = $_POST['papel'];

if($papel == "Administrador"){
    $adminController = AdministradorController::getInstance();
    $validado = $adminController->validaAdministrador($cpf,$senha);
    echo $validado;
}

/*$adminControl = AdministradorController::getInstance();
$administradores = $adminControl->getAdministradores();
foreach($administradores as $administrador){
    print_r($administrador);
}*/