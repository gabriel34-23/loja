<?php

include_once 'cadastrarProduto.class.php';
include_once '../model/produtoDAO.class.php';
include_once '../model/conexao.class';
$alocar = new cadastrarProduto();
$cad = new produtoDAO();
$con = new conexao();


$alocar->setNome($_POST["nome"]);
$alocar->setTamanho($_POST["tamanho"]);
$alocar->setValor($_POST["valor"]);
$alocar->setEstoque($_POST["estoque"]);
$alocar->setCodigo($_POST["codigo"]);

$cad->cadastrar($con->conexao(), $alocar->getNome(), $alocar->getTamanho(), $alocar->getValor(), $alocar->getEstoque(), $alocar->getCodigo());




