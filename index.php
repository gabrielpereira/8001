<?php

header('Location: /8001/view/template/production/login.html');
exit;

require_once("/controller/AdministradorController.php");
$_POST["cpf"] = "05747730703";
$_POST["pass"] = "revolt";
$adminControl = AdministradorController::getInstance();
$administradores = $adminControl->getAdministradores();
print_r($administradores);