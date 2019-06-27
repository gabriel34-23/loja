<?php

if (isset($_GET['pesq'])) {

    include_once '../model/conexao.class';
    $con = new conexao();

    include_once 'pesquisarFuncionario.class.php';
    $aloca = new pesquisarFuncionario();

    include_once '../model/funcionarioDAO.class.php';
    $pes = new funcionarioDAO();

    $aloca->setPesq($_GET['pesq']);

    $result = $pes->pesquisar($con->conexao(), $aloca->getPesq());

    if (isset($result)) {
        $res = "
            <table class='table table'>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Nome</th>
                <th scope='col'>CPF</th>
                <th scope='col'>Telefone</th>
                <th scope='col'>Email</th>
                <th scope='col'>Salario</th>
                <th scope='col'>Funcões</th>

            </tr>";
        sleep(1);
        //percorre os resultados via iteração
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            //exibe os resultados, acessando o objeto retornado
            $res .= "<tr>";
            $res .= "<td>" . $row->idFuncionario . "</td>" .
                    "<td>" . $row->nome . " </td>" .
                    "<td>" . $row->cpf . "</td>" .
                    "<td>" . $row->telefone . "</td>" .
                    "<td>" . $row->email . "</td>".
                    "<td>" . $row->salario . "</td>".
                    "<td>" ."<a href='alterarFuncionario.php?idFuncionario=$row->idFuncionario&nome=$row->nome"
                    . "&cpf=$row->cpf&telefone=$row->telefone&email=$row->email&salario=$row->salario'>Alterar</a> "
                    . "<br> <a href='../controller/deletarFuncionario.php?idFuncionario=$row->idFuncionario'>Deletar</a>". "</td>";


            $res .= "</tr>";
        }

        echo $res . "</table>";
    }
}
