<?php
	
require_once("Pessoa.php");

class Administrador extends Pessoa{
    //toDO: public senha;
    public $senha;

    public function preenchePorArray( $row ){
        //print_r($row);
        if(!isset($this->cpf)) {
            $this->cpf = $row['cpf'];
            $this->nome = $row['nome'];
            $this->data_nascimento = $row['data_nascimento'];
            $this->cep = $row['cep'];
            $this->endereco = $row['endereco'];
            $this->complemento = $row['complemento'];
            $this->bairro = $row['bairro'];
            $this->cidade = $row['cidade'];
            $this->estado = $row['estado'];
            $this->ddd = $row['ddd'];
            $this->telefone = $row['telefone'];
            $this->senha = $row['senha'];
        }
    }

    public function preenchePorParametros($cpf, $nome, $data_nascimento, $cep, $endereco, $complemento, $bairro, $cidade, $estado, $ddd, $telefone, $senha){
        $this->preenchePorArray(array($cpf, $nome, $data_nascimento, $cep, $endereco, $complemento, $bairro, $cidade, $estado, $ddd, $telefone, $senha));
    }
}