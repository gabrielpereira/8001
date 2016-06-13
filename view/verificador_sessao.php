<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Renard
 * Date: 13/06/2016
 * Time: 05:06
 */
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
        header('Location: /8001/view/template/production/login.html');
        exit;
    }
}
