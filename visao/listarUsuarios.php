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
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.dataTables.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/sb-admin-datatables.min.js"></script>
        <script src="js/dataTables.bootstrap4.js"></script>
        <link href="css/dataTables.bootstrap4.css" rel="stylesheet">

        <title>Lista de Usuários</title>
    </head>
    <body>
    <center>

        <div class="container">
            <div class="well alert alert-dark text-center" ><strong>Lista de Usuários</strong></div> 
            <table id="dataTable"class="table table-bordered table-hover">
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

                <?php
                $UsuarioDAO = new UsuarioDAO();
                $Usuarios = $UsuarioDAO->listarTodos();
                foreach ($Usuarios as $usuario) {
                    echo "<tr>";
                    echo "  <td> {$usuario->nome} </td>";
                    echo "  <td> {$usuario->login} </td>";
                    echo "  <td> {$usuario->perfil} </td>";
                    echo "  <td>" . dateUStoDateBR($usuario->dt_cadastro) . "</td>";
                    echo "  <td><a class='fa fa-trash text-danger'style='font-size:2rem' href='../controle/excluirUsuario.php?idusuario={$usuario->id_usuario}'></a></td>";
                    echo "  <td><a class='fa fa-pencil'style='font-size:2rem'href='formAlterarUsuario.php?idusuario={$usuario->id_usuario}'></a></td>";
                    echo "</tr>";
                }
                ?>

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
