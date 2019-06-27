<?php

class vendasDAO {

    public function cadastrar($conexao, $id_produto, $quantidade ) {
        try {
            $conexao->exec("insert into Venda(produto_id, quantidade)"
                    . " values ($id_produto, $quantidade)");
        } catch (Exception $exc) {
            
        }
    }
    
    public function pesquisar($conexao, $pesq) {
        $result = $conexao->query("SELECT * FROM Venda WHERE idVenda like'%" . $pesq . "%' or produto_id like'%" . $pesq . "%' or quantidade like'%" . $pesq . "%' or data_venda like'%" . $pesq . "%'");
        return $result;
    }

}
