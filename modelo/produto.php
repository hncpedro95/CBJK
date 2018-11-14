<?php

class produto {
    
    private $idProduto;
    private $nomeProduto;
    private $fabricante;
    private $quantidade;
    private $preco;
    private $foto;
        

        function __construct($nomeProduto,$fabricante,$quantidade,$preco,$foto) {
        $this->nomeProduto = $nomeProduto;
        $this->fabricante = $fabricante;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        $this->foto = $foto;
    }
    function getFoto() {
        return $this->foto;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

        function getIdProduto() {
        return $this->idProduto;
    }

    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

        
    function getNomeProduto() {
        return $this->nomeProduto;
    }

    function getFabricante() {
        return $this->fabricante;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getPreco() {
        return $this->preco;
    }

//    function getFoto() {
//        return $this->foto;
//    }

    function setNomeProduto($nomeProduto) {
        $this->nomeProduto = $nomeProduto;
    }

    function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

//    function setFoto($foto) {
//        $this->foto = $foto;
//    }


}

?>
