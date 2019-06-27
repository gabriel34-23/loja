<?php

include_once 'cadastrarFuncionario.class.php';
include_once '../model/funcionarioDAO.class.php';
include_once '../model/conexao.class';
$alocar = new cadastrarFuncionario();
$cad = new funcionarioDAO();
$con = new conexao();

$alocar->setNome($_POST["nome"]);
$alocar->setCpf($_POST["cpf"]);
$alocar->setTelefone($_POST["telefone"]);
$alocar->setEmail($_POST["email"]);
$alocar->setSalario($_POST["salario"]);

$cad->cadastrar($con->conexao(), $alocar->getNome(), $alocar->getCpf(), $alocar->getTelefone(), $alocar->getEmail(), $alocar->getSalario());


