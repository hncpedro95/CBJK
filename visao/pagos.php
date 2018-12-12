<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
require_once '../modelo/produtoDAO.php';
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
        <title>Tabela Pagos</title>       
    </head>
    <body>
        <br />
        <div class="container">
            <div class="well alert alert-dark text-center"><strong>Lista de Clientes Pagos</strong></div> 
            <table id="dataTable"class="table table-bordered table-hover">
                <thead>
                    <tr class="info">
                        <th>Nº da venda</th>
                        <th>Cod cliente</th>
                        <th>Nome do cliente</th>
                        <th>Saldo</th>
                      

                        <th style="text-align: center;">Ação</th>

                    </tr>
                </thead>

                <?php
//                $produtoDAO = new produtoDAO();
//                $produtos = $produtoDAO->listarTodos();
//
//                foreach ($produtos as $produto) {
//                    echo "<tr>";
//                    echo "  <td> {$venda->id_produto} </td>";
//                    echo "  <td> {$venda->nome} </td>";
//                    echo "  <td> {$venda->quantidade} </td>";
//                    echo "  <td> {$venda->preco} </td>";
//                    echo "  <td style='text-align: center;'>"
//                    . "   <a  class='fa fa-trash text-danger'style='font-size:2rem' href='../controle/excluirProduto.php?idProduto={$produto->id_produto}'></a>"
//                    . "   &nbsp; &nbsp;<a class='fa fa-pencil'style='font-size:2rem' href='formAlterarProduto.php?idProduto={$produto->id_produto}'></a>"
//                    . " </td>";
//                    echo "</tr>";
//                }
//                ?>
            </table>
            <?php
            if (!empty($_GET["msg"])) {
                echo "<div class='alert alert-success'>", $_GET["msg"], "</div>";
            }
            ?>
        </div>
    </body>
</html>

