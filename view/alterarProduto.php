
<?php
include 'menu.php';
?>

<div class="container" style="margin-top: 5%;">

    <?php
    if (isset($_GET['resposta'])) {
        $resposta = $_GET['resposta'];
        $alerta = $_GET['alerta'];

        echo "<div class='alert alert-$alerta' role='alert'>
           $resposta
          </div>";
    }
    ?>

        <form method="post" action="../controller/alterarProduto.php">

            <div class="form-group">

                <input name="idproduto" type="hidden"  value=<?php echo $_GET['idProduto'] ?>>
            </div>

            <div class="form-group">
                <label><b>Nome:</b></label>
                <input name="codigo" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['codigo'] ?>">
            </div>

            <div class="form-group">
                <label><b>Nome:</b></label>
                <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['nome'] ?>">
            </div>

            <div class="form-group">
                <label><b>Preço:</b></label>
                <input name="valor" type="txt" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['valor'] ?>" >
            </div>

            <div class="form-group">
                <label><b>Estoque:</b></label>
                <input name="estoque" type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['estoque'] ?>">
            </div>

            <div class="form-group">
                <label><b>Tamanho:</b></label>
                <input name="tamanho" type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_GET['tamanho'] ?>" >
            </div>


            <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 10%">Alterar Dados</button>
        </form>
    </div>
    <div style="margin-bottom: 15%;">
    </div>
   
<?php
include"rodape.php";
?>


