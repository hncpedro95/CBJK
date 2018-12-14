<?php

class Cliente {

    private $idCliente;
    private $nome_cliente;
    private $cpf;
    private $endereco;
    private $id_usuario;
    private $numero;
    private $complemento;
    private $bairro;
    private $estado;
    private $cidade;
    private $telefone;
    private $celular;
    private $whatsapp;
    
    function __construct( $nome_cliente, $cpf, $endereco, $numero, $complemento, $bairro, $estado, $cidade, $telefone, $celular) {
        $this->nome_cliente = $nome_cliente;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->telefone = $telefone;
        $this->celular = $celular;
    }

        function getIdCliente() {
        return $this->idCliente;
    }

    function getNome_cliente() {
        return $this->nome_cliente;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCelular() {
        return $this->celular;
    }

    function getWhatsapp() {
        return $this->whatsapp;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNome_cliente($nome_cliente) {
        $this->nome_cliente = $nome_cliente;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setWhatsapp($whatsapp) {
        $this->whatsapp = $whatsapp;
    }




}

?>
