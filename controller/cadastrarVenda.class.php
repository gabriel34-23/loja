<?php

class cadastrarVenda {

    private $id_produto;
    private $quantidade;

   
    function getId_produto() {
        return $this->id_produto;
    }



    function getQuantidade() {
        return $this->quantidade;
    }

   
    function setId_produto($id_produto) {
        $this->id_produto = $id_produto;
    }


    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    


}
