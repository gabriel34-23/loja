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
    <script type="text/javascript">
            function onlynumber(evt) {
                var theEvent = evt || window.event;
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
                //var regex = /^[0-9.,]+$/;
                var regex = /^[0-9.]+$/;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault)
                        theEvent.preventDefault();

                }

            }

        </script>

        <form method="post" action="../controller/cadastrarProduto.php">

            <div class="form-group">
                <label><b>Código:</b></label>
                <input name="codigo" type="text" onkeypress="return onlynumber()" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            <div class="form-group">
                <label><b>Nome:</b></label>
                <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="form-group">
                <label><b>Preço:</b></label>
                <input name="valor" type="txt" onkeypress="return onlynumber()" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="form-group">
                <label><b>Estoque:</b></label>
                <input name="estoque" type="number" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="form-group">
                <label><b>Tamanho:</b></label>
                <input name="tamanho" type="text" class="form-control" id="exampleFormControlInput1" >
            </div>


            <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 10%">Cadastrar</button>
        </form>
    </div>
    <div style="margin-bottom: 15%;">
    </div>

<?php
include"rodape.php";
?>
