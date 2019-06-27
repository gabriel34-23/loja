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
    <form method="post" action="../controller/cadastrarVenda.php">


        <div class="form-group">
            <label><b>Id do produto:</b></label>
            <input name="produto_id" type="text" class="form-control" id="exampleFormControlInput1" required>
        </div>

        <div class="form-group">
            <label><b>Quantidade:</b></label>
            <input name="quantidade" type="number" class="form-control" id="exampleFormControlInput1" required>
        </div> 
        
        <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 10%">Realizar Venda</button>
    </form>
</div>
<?php
include"rodape.php";
?>
