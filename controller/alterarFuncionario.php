<?php

include_once 'alterarFuncionario.class.php';
include_once '../model/funcionarioDAO.class.php';
include_once '../model/conexao.class';
$alocar = new alterarFuncionario();
$alterar = new funcionarioDAO();
$con = new conexao();

$alocar->setIdfuncionario($_POST["idfuncionario"]);
$alocar->setNome($_POST["nome"]);
$alocar->setCpf($_POST["cpf"]);
$alocar->setTelefone($_POST["telefone"]);
$alocar->setEmail($_POST["email"]);
$alocar->setSalario($_POST["salario"]);

$alterar->alterar($con->conexao(),$alocar->getIdfuncionario(), $alocar->getNome(), $alocar->getCpf(), $alocar->getTelefone(), $alocar->getEmail(), $alocar->getSalario());






