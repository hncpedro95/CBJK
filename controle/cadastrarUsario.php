<?php

require_once '../modelo/Usuario.php';
require_once '../modelo/UsuarioDAO.php';

// Recuperando os dados do formulario
print_r($_POST);
print_r($_FILES["foto"]);
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$idPerfil = $_POST["perfil"];


$usuarioDAO = new UsuarioDAO();
$qtdLogin = $usuarioDAO->verificaLogin($login);
if ($qtdLogin ==0) {

    if (isset($_FILES["foto"])) {
        require_once '../modelo/Upload.class.php';
        $upload = new upload($_FILES["foto"]['name'], "../visao/imagens/fotos/");
        if ($upload->processed) {
            $foto = $upload->file_dst_name;
        
        }
    }

    $novoUsuario = new Usuario($nome, $login, md5($senha), $idPerfil, $foto);

    $sucesso = $usuarioDAO->cadastrar($novoUsuario);
    var_dump($sucesso);
    if ($sucesso) {
        $msg = "Usuário cadastrado com sucesso!";
        header('Location: ../visao/listarUsuarios.php?msg=' . $msg);
    }
} else {
    $msg = "Usuário já cadastrado!";
    header('Location: ../visao/listarUsuarios.php?msg=' . $msg);
}
?>