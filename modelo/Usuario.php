<?php

class Usuario {

    private $idUsuario;
    private $nome_usuario;
    private $login;
    private $senha;
    private $idPerfil;
    private $dataCadastro;
    private $foto;
    
    function __construct($nome_usuario, $login, $senha, $idPerfil, $dataCadastro) {
        $this->nome_usuario = $nome_usuario;
        $this->login = $login;
        $this->senha = $senha;
        $this->idPerfil = $idPerfil;
        $this->dataCadastro = $dataCadastro;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNome_usuario() {
        return $this->nome_usuario;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getIdPerfil() {
        return $this->idPerfil;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getFoto() {
        return $this->foto;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNome_usuario($nome_usuario) {
        $this->nome_usuario = $nome_usuario;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setIdPerfil($idPerfil) {
        $this->idPerfil = $idPerfil;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }



}
