<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
require_once '../modelo/ClienteDAO.php';
require_once '../util/funcaoData.php';
?> 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="js/jquery.dataTables.js">
        </script>

        <script src="js/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="js/sb-admin-datatables.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/sb-admin.min.css" rel="stylesheet">
        
        <title>Lista de Clientes</title>        
    </head>
    <body id="page-top">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="principal.php" target="_parent">Início</a>
            </li>
            <li class="breadcrumb-item "> <a href="#">Clientes</a></li>
            <li class="breadcrumb-item active"> Listar</li>

        </ol>
        <br />
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr class="info">
                            <th>COD. Cliente</th>
                            <th>Nome</th>
                            <th>Cpf</th>
                            <th>Cidade</th>
                            <th>Telefone</th>
                            <th>Whatsapp</th>
                            <th>Excluir</th>
                            <th>Alterar</th>
                        </tr>
                    </thead>

                    <?php
                    $clienteDAO = new ClienteDAO();
                    $clientes = $clienteDAO->listarTodos();

                    foreach ($clientes as $cliente) {
                        echo "<tr>";
                        echo "  <td>{$cliente->id_cliente}</td>";
                        echo "  <td>{$cliente->nome}</td>";
                        echo "  <td>{$cliente->cpf}</td>";
                        echo "  <td>{$cliente->cidade}</td>";
                        echo "  <td>{$cliente->telefone}</td>";
                        echo "  <td>{$cliente->whatsapp}</td>";
                        echo "  <td><a href='../controle/excluirCliente.php?idcliente={$cliente->id_cliente}'>Excluir</a></td>";
                        echo "  <td><a href='formAlterarCliente.php?idcliente={$cliente->id_cliente}'>Alterar</a></td>";
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
        </div>
 <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fa fa-angle-up"></i>
                </a>
    </body>
</html>
