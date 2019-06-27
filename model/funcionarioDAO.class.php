<?php

class funcionarioDAO {

    public function cadastrar($conexao, $nome, $cpf, $telefone, $email, $salario) {
        try {
            $conexao->exec("insert into Funcionario(nome, cpf, telefone, email, salario) values ('$nome', '$cpf', '$telefone', '$email', $salario)");
            header("Location:../view/cadastrarFuncionario.php?resposta=Cadastrado com sucesso&alerta=success");
        } catch (Exception $exc) {
            header("Location:../view/cadastrarFuncionario.php?resposta=Erro ao cadastrar&alerta=danger");
        }
    }

    public function alterar($conexao, $idfuncionario, $nome, $cpf, $telefone, $email, $salario) {
        try {
            $conexao->query("update Funcionario set nome='{$nome}', cpf='{$cpf}', telefone='{$telefone}', email='{$email}', salario='{$salario}' where idFuncionario={$idfuncionario}");
            header("Location:../view/listarFuncionario.php?resposta=Alterado com sucesso&alerta=success");
        } catch (Exception $query) {
            header("Location:../view/listarFuncionario.php?resposta=Erro ao Alterar&alerta=danger");
        }
    }

    public function deletar($conexao, $idfuncionario) {
        try {
            $conexao->query("delete from Funcionario where idFuncionario={$idfuncionario}");
            header("Location:../view/listarFuncionario.php?resposta=Deletado com sucesso&alerta=success");
        } catch (Exception $query) {
            header("Location:../view/listarFuncionario.php?resposta=Erro ao Deletar&alerta=danger");
        }
    }

    public function pesquisar($conexao, $pesq) {
        $result = $conexao->query("SELECT * FROM Funcionario WHERE nome like'%" . $pesq . "%' or cpf like'%" . $pesq . "%' or salario like'%" . $pesq . "%' or idFuncionario like'%" . $pesq . "%'");


        return $result;
    }

}
