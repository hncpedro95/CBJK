<?php

class venda {

    private $idVenda;
    private $idCliente;
    private $idUsuario;
    private $valorTotal;
    private $data;    
    private $numeroPedido;    

    function __construct($idCliente, $idUsuario, $valorTotal, $data, $numeroPedido) {
        $this->idCliente = $idCliente;
        $this->idUsuario = $idUsuario;
        $this->valorTotal = $valorTotal;
        $this->data = $data;
        $this->numeroPedido = $numeroPedido;
    }
    function getIdVenda() {
        return $this->idVenda;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getValorTotal() {
        return $this->valorTotal;
    }

    function getData() {
        return $this->data;
    }

    function getNumeroPedido() {
        return $this->numeroPedido;
    }

    function setIdVenda($idVenda) {
        $this->idVenda = $idVenda;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setValorTotal($valorTotal) {
        $this->valorTotal = $valorTotal;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setNumeroPedido($numeroPedido) {
        $this->numeroPedido = $numeroPedido;
    }


}
?>
