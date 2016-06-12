<?php
/**
 * Created by PhpStorm.
 * User: Renard
 * Date: 11/06/2016
 * Time: 18:36
 */
require_once("/model/Pessoa.php");

class Administrador extends Pessoa{
    public $senha;

    function __construct($cpf, $nome, $data_nascimento, $cep, $endereco, $complemento, $bairro, $cidade, $estado, $ddd, $telefone, $senha){
        $this->$cpf = $cpf;
        $this->$nome = $nome;
        $this->$data_nascimento = $data_nascimento;
        $this->$cep = $cep;
        $this->$endereco = $endereco;
        $this->$complemento = $complemento;
        $this->$bairro = $bairro;
        $this->$cidade = $cidade;
        $this->$estado = $estado;
        $this->$ddd = $ddd;
        $this->$telefone = $telefone;
        $this->senha = $senha;
    }

    function restoreFromPDOStatement($row){
        $this->$cpf = $row['cpf'];
        $this->$nome = $row['nome'];
        $this->$data_nascimento = $row['data_nascimento'];
        $this->$cep = $row['cep'];
        $this->$endereco = $row['endereco'];
        $this->$complemento = $row['complemento'];
        $this->$bairro = $row['bairro'];
        $this->$cidade = $row['cidade'];
        $this->$estado = $row['estado'];
        $this->$ddd = $row['ddd'];
        $this->$telefone = $row['telefone'];
        $this->senha = $row['senha'];
        return $this;
    }
}