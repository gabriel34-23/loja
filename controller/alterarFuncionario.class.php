<?php

class alterarFuncionario {

    private $idfuncionario;
    private $nome;
    private $cpf;
    private $telefone;
    private $email;
    private $salario;

    function getIdfuncionario() {
        return $this->idfuncionario;
    }

    function setIdfuncionario($idfuncionario) {
        $this->idfuncionario = $idfuncionario;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getSalario() {
        return $this->salario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

}
