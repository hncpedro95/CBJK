<?php
require_once '../modelo/Usuario.php';
require_once '../modelo/UsuarioDAO.php';

// Recuperando os dados do formulario
$idUsuario = $_POST["idUsuario"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senhaAntiga = $_POST["senha_antiga"];
$novaSenha = $_POST["senha"];
$idPerfil = $_POST["perfil"];

//salva a foto de perfil do usuário
$foto_perfil="";
if(isset($_FILES["foto"])){
    require_once '../modelo/Upload.class.php';
    $upload= new upload($_FILES["foto"], "../visao/imagens/fotos/");
    //verifica se conseguiu salvar a foto na pasta
    if ($upload->processed){
        $foto=$upload->file_dst_name;
    }
}

$usuario = new Usuario($nome, $login, $senhaAntiga, $idPerfil, $foto);
$usuario->setIdUsuario($idUsuario);
$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setIdPerfil($idPerfil);

//verifica se alterou a senha
if (empty($novaSenha)) {
    $usuario->setSenha($senhaAntiga);
} else {
    $usuario->setSenha(md5($novaSenha));
}

$usuarioDAO = new UsuarioDAO();
$sucesso = $usuarioDAO->editar($usuario);

if ($sucesso) {
    $msg = "Usuário atualizado com sucesso!";
    header('Location: ../visao/formAlterarUsuario.php?idusuario=' 
            . $idUsuario . '&msg=' . $msg);
}
?>