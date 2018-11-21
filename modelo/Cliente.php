<?php

class Cliente {

    private $idCliente;
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $endereco;
    private $id_usuario;
    private $numero;
    private $complemento;
    private $estado;
    private $cidade;
    private $telefone;
    private $celular;
    private $whatsapp;
    
            

        function __construct($nome,$cpf,$rg,$dataNascimento,$endereco,$sexo, $numero, $complemento, $estado, $cidade,
                $telefone, $celular, $whatsapp) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->dataNascimento = $dataNascimento;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->whatsapp = $whatsapp;
        
        
    }
    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
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

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
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

        function getIdCliente() {
        return $this->idCliente;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
}

?>
