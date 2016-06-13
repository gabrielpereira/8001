<?php

require_once("../controller/AdministradorController.php");
require_once("../controller/ClienteController.php");

$cpf = $_POST['cpf'];
$hashSenha = MD5($_POST['senha']);
$papel = $_POST['papel'];

if($papel == "Administrador"){
    $adminController = AdministradorController::getInstance();
    echo json_encode($adminController->validaAdministrador($cpf,$hashSenha));
}

/*$adminControl = AdministradorController::getInstance();
$administradores = $adminControl->getAdministradores();
foreach($administradores as $administrador){
    print_r($administrador);
}*/