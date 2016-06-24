<?php

require_once("../controller/AdministradorController.php");
require_once("../controller/ClienteController.php");

$cpf = $_POST['cpf'];
$hashSenha = MD5($_POST['senha']);
$hSenha = $_POST['senha'];
$papel = $_POST['papel'];
$_POST['hashSenha']=$hashSenha;

if($papel == "Administrador"){
    $adminController = AdministradorController::getInstance();
    echo json_encode($adminController->validaAdministrador($cpf,$hashSenha));
}

if($papel == "Cliente"){
    $adminController2 = ClienteController::getInstance();
    echo json_encode($adminController2->validaCliente($cpf,$hSenha));
}

/*$adminControl = AdministradorController::getInstance();
$administradores = $adminControl->getAdministradores();
foreach($administradores as $administrador){
    print_r($administrador);
}*/