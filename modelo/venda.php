<?php

class venda {

    private $id_venda;
    private $idCliente;
    private $id_usuario;
    private $valor_total;
    private $data;    
    private $numero_pedido;    

    function __construct($idCliente, $id_usuario, $valor_total, $data, $numero_pedido) {
        $this->idCliente = $idCliente;
        $this->id_usuario = $id_usuario;
        $this->valor_total = $valor_total;
        $this->data = $data;
        $this->numero_pedido = $numero_pedido;
    }

    function getId_venda() {
        return $this->id_venda;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getValor_total() {
        return $this->valor_total;
    }

    function getData() {
        return $this->data;
    }

    function getNumero_pedido() {
        return $this->numero_pedido;
    }

    function setId_venda($id_venda) {
        $this->id_venda = $id_venda;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setValor_total($valor_total) {
        $this->valor_total = $valor_total;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setNumero_pedido($numero_pedido) {
        $this->numero_pedido = $numero_pedido;
    }


}
?>
