<?php

include_once '../model/conexao.class';
$con = new conexao();

include_once 'cadastrarVenda.class.php';
$alocar = new cadastrarVenda();

include_once '../model/vendasDAO.class.php';
$cad = new vendasDAO();

include_once '../model/produtoDAO.class.php';
$pes = new produtoDAO();

include 'pesquisarProduto.class.php';
$aloca_pesq = new pesquisarProduto();

$aloca_pesq->setPesq($_POST['produto_id']);

$result = $pes->pesquisar($con->conexao(), $aloca_pesq->getPesq());

if ($result) {
    $alocar->setId_produto($_POST["produto_id"]);
    $alocar->setQuantidade($_POST["quantidade"]);

    $cad->cadastrar($con->conexao(), $alocar->getId_produto(), $alocar->getQuantidade());

    header("Location:../view/Venda.php?resposta=Venda Realizada com sucesso&alerta=success");
} else {
    header("Location:../view/Venda.php?resposta=Não foi possivel realizar está venda. Tente novamenter&alerta=danger");
}


$pes->estoque($con->conexao(), $alocar->getId_produto(), $alocar->getQuantidade());







