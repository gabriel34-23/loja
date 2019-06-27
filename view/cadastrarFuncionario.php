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
            function mascara(telefone) {
                if (telefone.value.length == 0)
                    telefone.value = '(' + telefone.value;
                if (telefone.value.length == 3)
                    telefone.value = telefone.value + ')';
                if (telefone.value.length == 9)
                    telefone.value = telefone.value + '-';
            }
        </script>
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


        <form method="post" action="../controller/cadastrarFuncionario.php">


            <div class="form-group">
                <label><b>Nome:</b></label>
                <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>

            <div class="form-group">
                <label><b>CPF:</b></label>
                <input maxlength="11" name="cpf" onkeypress="return onlynumber()" type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>


            <div class="form-group">
                <label><b>Telefone:</b></label>
                <input maxlength="14" name="telefone" type="text" class="form-control" onkeypress="mascara(this)" id="exampleFormControlInput1" required>
            </div> 

            <div class="form-group">
                <label><b>Endereço de email:</b></label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1">
            </div>


            <div class="form-group">
                <label><b>Salário:</b></label>
                <input  name="salario" type="text" class="form-control" id="exampleFormControlInput1" required>
            </div> 


            <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 10%">Cadastrar</button>
        </form>
    </div>
    <div style="margin-bottom: 15%;">
    </div>

<?php
include"rodape.php";
?>
