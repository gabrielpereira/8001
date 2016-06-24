<?php
require_once("DataAccessObject.php");
require_once(__DIR__."/../model/Administrador.php");


class AdministradorDAO extends DataAccessObject{

    public function getAdministradores(){
        $administradores = array();
        $query = "SELECT * FROM Administrador INNER JOIN Pessoa ON Administrador.cpf = Pessoa.cpf";
        $rows = parent::retrieve($query, array());
        foreach($rows as $row){
            $administradores[] = new Administrador($row['cpf'], $row['nome'], $row['data_nascimento'], $row['cep'], $row['endereco'],
                $row['complemento'], $row['bairro'], $row['cidade'], $row['estado'], $row['ddd'], $row['telefone'], $row['senha']);
        }
        return $administradores;
    }
    //toDo:Prevent SQL Injection
    public function getAdministrador($cpf){
        $administradores = array();
        $query = "SELECT * FROM Administrador INNER JOIN Pessoa ON Administrador.cpf = Pessoa.cpf WHERE Pessoa.cpf = ".$cpf."";
        $rows = parent::retrieve($query, array());
        foreach($rows as $row){
            $administrador = new Administrador();
            $administrador->preenchePorArray($row);
            $administradores[] = $administrador;
        }
        return $administradores[0];
    }
}