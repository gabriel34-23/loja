<?php


include_once 'deletarFuncionario.class.php';
include_once '../model/funcionarioDAO.class.php';
include_once '../model/conexao.class';
$alocar = new deletarFuncionario();
$cad = new funcionarioDAO();
$con = new conexao();


$alocar->setIdfuncionario($_GET["idFuncionario"]);

$cad->deletar($con->conexao(), $alocar->getIdfuncionario());

