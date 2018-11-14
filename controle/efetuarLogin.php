<?php
require_once '../modelo/LoginDAO.php';

$login = $_POST["login"];
$senha = $_POST["senha"];

$loginDAO = new LoginDAO();
$usuario = $loginDAO->login($login, $senha);

if (!empty($usuario)) {
    session_start();
    $_SESSION["MVC"] = TRUE;
    $_SESSION["usuario"] = $usuario->login;
    $_SESSION["nome_usuario"] = $usuario->nome;
    $_SESSION["perfil"] = $usuario->perfil;
    $_SESSION["id_usuario"] = $usuario->id_usuario;
    $_SESSION["foto"] = $usuario->foto;    
    
    header('Location: ../visao/principal.php');
} else {
    $msg = "Usuário e/ou senha inválidos!";
    header('Location: ../index.php?msg='.$msg);
}