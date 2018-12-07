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
        <title>Lista Produtos</title>       
    </head>
    <body>
    <br />
    <center>
        <div class="container">
            <div class="well"><strong>Lista de Produtos</strong></div> 
            <table id="dataTable"class="table table-bordered table-hover">
                <thead>
                    <tr class="info">
                        <th>Código do produto</th>
                        <th>Nome do produto</th>
                        <!--<th>Fabricante</th>-->
                        <th>Quantidade</th>
                       <th>Preço</th>
                       <!--<th>Foto</th>-->
                       
                       <th style="text-align: center;">Opções</th>
                                          
                    </tr>
                </thead>

                <?php
                $produtoDAO = new produtoDAO();
                $produtos = $produtoDAO->listarTodos();

                foreach ($produtos as $produto) {
                    echo "<tr>";
                    echo "  <td> {$produto->id_produto} </td>";
                    echo "  <td> {$produto->nome} </td>";
//                    echo "  <td> {$produto->fabricante} </td>";
                    echo "  <td> {$produto->quantidade} </td>";
                    echo "  <td> {$produto->preco} </td>";
//                    echo '<td> <img width="100" height="60" src="imagens/fotosProdutos/'.$produto->foto.'"  ></td>';
                    echo "  <td style='text-align: center;'>"
                        . "   <a  class='fa fa-trash text-danger'style='font-size:2rem' href='../controle/excluirProduto.php?idProduto={$produto->id_produto}'></a>"
                        . "   &nbsp; &nbsp;<a class='fa fa-pencil'style='font-size:2rem' href='formAlterarProduto.php?idProduto={$produto->id_produto}'></a>"
                        . " </td>";
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
