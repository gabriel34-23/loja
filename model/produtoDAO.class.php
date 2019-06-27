<?php

class produtoDAO {

    public function cadastrar($conexao, $nome, $tamanho, $valor, $estoque, $codigo) {
        try {
            $conexao->exec("insert into Produto(nome,tamanho,valor,estoque,codigo) values ('$nome','$tamanho',$valor,$estoque, $codigo)");
            header("Location:../view/cadastrarProduto.php?resposta=Cadastrado com sucesso&alerta=success");
        } catch (Exception $exc) {
            header("Location:../view/cadastrarProduto.php?resposta=Erro ao cadastrar&alerta=danger");
        }
    }

    public function estoque($conexao,$id,$quantidade) {
        try {
            $conexao->query("update Produto estoque = estoque - $quantidade where idProduto=$id");
           
        } catch (Exception $exc) {
            //header("Location:../view/Venda.php?resposta=Erro ao retirar do estoque&alerta=danger");    
        }
    }

    public function alterar($conexao, $idproduto, $nome, $tamanho, $valor, $estoque, $codigo) {
        try {
            $conexao->query("update Produto set nome='{$nome}', tamanho='{$tamanho}', valor={$valor}, estoque={$estoque}, codigo = {$codigo} where idProduto={$idproduto}");
            header("Location:../view/listarProduto.php?resposta=Alterado com sucesso&alerta=success");
        } catch (Exception $query) {
            header("Location:../view/listarProduto.php?resposta=Erro ao Alterar&alerta=danger");
        }
    }

    public function deletar($conexao, $idproduto) {
        try {
            $conexao->query("delete from  Produto where idProduto={$idproduto}");
            header("Location:../view/listarProduto.php?resposta=Deletado com sucesso&alerta=success");
        } catch (Exception $query) {
            header("Location:../view/listarProduto.php?resposta=Erro ao Deletar&alerta=danger");
        }
    }

    public function pesquisar($conexao, $pesq) {
        $result = $conexao->query("SELECT * FROM Produto WHERE nome like'%" . $pesq . "%' or idProduto like '%" . $pesq . "%' or valor like'%" . $pesq . "%' or codigo like'%" . $pesq . "%'");
        return $result;
    }

}
