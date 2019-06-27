<?php

include 'menu.php';
include '../controller/pesquisarVenda.php';
?>

<?php

if (isset($_GET['resposta'])) {
    $resposta = $_GET['resposta'];
    $alerta = $_GET['alerta'];

    echo "<div class='alert alert-$alerta' role='alert'>
           $resposta
          </div>";
}
?>

    <script type="text/javascript" src="../controller/ajax.js"></script>
    <div class="container" style="margin-top: 5%;">

        <div class="form-group">
            <label><b>Pesquisa das vendas:</b></label>
            <input type="search" class="form-control" placeholder="Pesquise aqui..."
                   onkeyup='pesquisar_venda(this.value)'>
        </div>

        <div id="resultado">

        </div>



    </div >
    <div style="margin-bottom: 30%;">
    </div>


<?php

include"rodape.php";
?>

