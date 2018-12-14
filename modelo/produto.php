<?php

class produto {

    private $idProduto;
    private $nome_produto;
    private $quantidade;
    private $preco;

    function __construct($nome_produto, $quantidade, $preco) {
        $this->nome_produto = $nome_produto;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }

    function getIdProduto() {
        return $this->idProduto;
    }

    function getNome_produto() {
        return $this->nome_produto;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getPreco() {
        return $this->preco;
    }

    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    function setNome_produto($nome_produto) {
        $this->nome_produto = $nome_produto;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }


   
}

?>
