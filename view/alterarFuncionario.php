<?php
include 'menu.php';
?>

<div class="container" style="margin-top: 5%;">

   

        <form method="post" action="../controller/alterarFuncionario.php">

            <div class="form-group">

                <input name="idfuncionario" type="hidden"  value=<?php echo $_GET['idFuncionario'] ?>>
            </div> 

            <div class="form-group">
                <label><b>Nome:</b></label>
                <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['nome'] ?>" >
            </div>

            <div class="form-group">
                <label><b>CPF:</b></label>
                <input name="cpf" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['cpf'] ?>" >
            </div>


            <div class="form-group">
                <label><b>Telefone:</b></label>
                <input name="telefone" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['telefone'] ?>">
            </div> 

            <div class="form-group">
                <label><b>Endereço de email:</b></label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['email'] ?>">
            </div>


            <div class="form-group">
                <label><b>Salário:</b></label>
                <input  name="salario" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['salario'] ?>">
            </div> 


            <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 10%">Atualizar dados</button>
        </form>
    </div>
    <div style="margin-bottom: 15%;">
    </div>


<?php
include"rodape.php";
?>
