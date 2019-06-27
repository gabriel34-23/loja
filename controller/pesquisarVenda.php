<?php

if (isset($_GET['pesq'])) {

    include_once '../model/conexao.class';
    $con = new conexao();

    include_once 'pesquisarVenda.class.php';
    $aloca = new pesquisarVenda();

    
    include_once '../model/vendasDAO.class.php';
    $pes = new vendasDAO();

    $aloca->setPesq($_GET['pesq']);

    $result = $pes->pesquisar($con->conexao(), $aloca->getPesq());

    if (isset($result)) {
        $res = "
            <table class='table table'>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Id do produto</th>
                <th scope='col'>quantidade</th>
                <th scope='col'>data da venda</th>


            </tr>";
        sleep(1);
        //percorre os resultados via iteração
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            //exibe os resultados, acessando o objeto retornado
            $res .= '<tr>';
            $res .= '<td>' . $row->IdVenda . '</td>' .
                    '<td>' . $row->produto_id . '</td>' .
                    '<td>' . $row->quantidade . ' </td> ' .
                    '<td>' . $row->data_venda . '</td>';

            $res .= '</tr>';
        }

        echo $res . '</table>';
    }
}



