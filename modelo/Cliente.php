<?php

class Cliente {

    private $idCliente;
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $endereco;
    private $id_usuario;
    

        function __construct($nome,$cpf,$rg,$dataNascimento,$endereco,$sexo) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->dataNascimento = $dataNascimento;
        $this->endereco = $endereco;
        $this->sexo = $sexo;
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
