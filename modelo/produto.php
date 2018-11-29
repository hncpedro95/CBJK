<?php

class produto {

    private $idProduto;
    private $nome;
    private $quantidade;
    private $preco;

    function __construct($nome, $quantidade, $preco) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }

    function getIdProduto() {
        return $this->idProduto;
    }

    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    function getNome() {
        return $this->nome;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getPreco() {
        return $this->preco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

}

?>
