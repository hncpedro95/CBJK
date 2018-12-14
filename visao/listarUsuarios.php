<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
require_once '../modelo/UsuarioDAO.php';
require_once '../util/funcaoData.php';
?> 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dataTables.js"></script>
        <script src="js/sb-admin-datatables.min.js"></script>
        <script src="js/dataTables.bootstrap4.js"></script>
        <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <title>Lista Usuários</title>       
    </head>
    <body>


        <div class="container">
            <div class="well alert alert-dark text-center" ><strong>Lista de Usuários</strong></div> 
            <table id="dataTable"class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr class="info">
                        <th class='text-center'>Nome </th>
                        <th>Login </th>
                        <th>Perfil </th>
                        <th>Data de Cadastro </th>
                        <th style="text-align: center;">Opções</th>
                    </tr>

                </thead>

                <?php
                $UsuarioDAO = new UsuarioDAO();
                $Usuarios = $UsuarioDAO->listarTodos();
                foreach ($Usuarios as $usuario) {
                    echo "<tr>";
                    echo "  <td class='text-center'> {$usuario->nome_usuario} </td>";
                    echo "  <td> {$usuario->login} </td>";
                    echo "  <td> {$usuario->perfil} </td>";
                    echo "  <td class='text-center'>" . dateUStoDateBR($usuario->dt_cadastro) . "</td>";
                    echo "  <td style='text-align: center;'>"
                    . "            <a class='fa fa-trash text-danger'style='font-size:2rem' href='../controle/excluirUsuario.php?idusuario={$usuario->id_usuario}'></a>";
                    echo "         &nbsp; &nbsp;<a class='fa fa-pencil'style='font-size:2rem'href='formAlterarUsuario.php?idusuario={$usuario->id_usuario}'></a>"
                    . "     </td>";
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

    </body>
</html>
