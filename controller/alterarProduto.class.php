<?php

class alterarProduto {

    private $idproduto;
    private $nome;
    private $tamanho;
    private $valor;
    private $estoque;
    private $codigo;

    function getIdproduto() {
        return $this->idproduto;
    }

    function setIdproduto($idproduto) {
        $this->idproduto = $idproduto;
    }

    function getNome() {
        return $this->nome;
    }

    function getTamanho() {
        return $this->tamanho;
    }

    function getValor() {
        return $this->valor;
    }

    function getEstoque() {
        return $this->estoque;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

}