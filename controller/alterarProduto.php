<?php

include_once 'alterarProduto.class.php';
include_once '../model/produtoDAO.class.php';
include_once '../model/conexao.class';
$alocar = new alterarProduto();
$alterar = new produtoDAO();
$con = new conexao();

$alocar->setIdproduto($_POST["idproduto"]);
$alocar->setNome($_POST["nome"]);
$alocar->setTamanho($_POST["tamanho"]);
$alocar->setValor($_POST["valor"]);
$alocar->setEstoque($_POST["estoque"]);
$alocar->setCodigo($_POST["codigo"]);

$alterar->alterar($con->conexao(),$alocar->getIdproduto(), $alocar->getNome(), $alocar->getTamanho(), $alocar->getValor(), $alocar->getEstoque(), $alocar->getCodigo());


