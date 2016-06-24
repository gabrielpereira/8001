<?php
session_start();

function verificaCredenciais($papel_exigido){
    if(isset($_SESSION['papel'])){
        //atualiza a sessão
        $_SESSION['last-access'] = time();

        switch($_SESSION['papel']){
            case "Administrador":
                return ($papel_exigido == "Administrador") ? TRUE : FALSE;
                break;
            case "Cliente":
                return ($papel_exigido == "Cliente") ? TRUE : FALSE;
                break;
            default:
                return FALSE;
        }
    }else{
        header('Location: /view/template/production/dashboard2.php');
        exit;
    }
}
