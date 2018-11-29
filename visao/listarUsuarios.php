<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
require_once '../modelo/UsuarioDAO.php';
require_once '../util/funcaoData.php';
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Lista de Usuários</title>
    </head>
    <body>
    <center>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="principal.php" target="_parent">Início</a>
            </li>
            <li class="breadcrumb-item "> <a href="#">Usuários</a></li>
            <li class="breadcrumb-item active"> Listar</li>
        </ol>
        <div class="container">
             <div class="well alert alert-dark text-center" ><strong>Lista de Usuários</strong></div> 
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="info">
                        <th>Nome </th>
                        <th>Login </th>
                        <th>Perfil </th>
                        <th>Data de Cadastro </th>
<!--                        <th>Foto Do Perfil</th>-->
                        <th>Excluir </th>
                        <th>Alterar </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $UsuarioDAO = new UsuarioDAO();
                    $Usuarios = $UsuarioDAO->listarTodos();
                    foreach ($Usuarios as $usuario) {
                        echo "<tr>";
                        echo "  <td> {$usuario->nome} </td>";
                        echo "  <td> {$usuario->login} </td>";
                        echo "  <td> {$usuario->perfil} </td>";
                        echo "  <td>" . dateUStoDateBR($usuario->dt_cadastro) . "</td>";
                         echo "  <td><a class='btn btn-danger' href='../controle/excluirUsuario.php?idusuario={$usuario->id_usuario}'>Excluir</a></td>";
                          echo "  <td><a class='btn btn-secondary'href='formAlterarUsuario.php?idusuario={$usuario->id_usuario}'>Alterar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php
            if (!empty($_GET["msg"])) {
                echo "<div class='alert alert-success'>", $_GET["msg"], "</div>";
            }
            ?>
        </div>
    </center>
</body>
</html>
