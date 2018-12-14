<?php
class ItensVenda
{
    private $id_produto;
    private $id_venda;
    private $quantidade;
    
    function __construct($id_produto, $id_venda, $quantidade) {
        $this->id_produto = $id_produto;
        $this->id_venda = $id_venda;
        $this->quantidade = $quantidade;
    }
    function getId_produto() {
        return $this->id_produto;
    }

    function getId_venda() {
        return $this->id_venda;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function setId_produto($id_produto) {
        $this->id_produto = $id_produto;
    }

    function setId_venda($id_venda) {
        $this->id_venda = $id_venda;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }


}