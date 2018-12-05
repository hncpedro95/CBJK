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
        <title>Lista Produtos</title>       
    </head>
    <body>
    <br />
    <center>
        <div class="container">
            <div class="well"><strong>Lista de Produtos</strong></div> 
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="info">
                        <th>ID do produto</th>
                        <th>Nome do produto</th>
                        <th>Quantidade</th>
                       <th>Preço</th>
                       
                       <th style="text-align: center;">Opções</th>
                                          
                    </tr>
                </thead>

                <?php
                $produtoDAO = new produtoDAO();
                $produtos = $produtoDAO->listarTodos();

                foreach ($produtos as $produto) {
                    echo "<tr>";
                    echo "  <td>{$produto->id_produto}</td>";
                    echo "  <td>{$produto->nome}</td>";
                    echo "  <td>{$produto->quantidade}</td>";
                    echo "  <td>{$produto->preco}</td>";
                    echo "  <td style='text-align: center;'>"
                        . "   <a  href='../controle/excluirProduto.php?idProduto={$produto->id_produto}'>Excluir</a>"
                        . "   &nbsp; &nbsp;<a href='formAlterarProduto.php?idProduto={$produto->id_produto}'>Alterar</a>"
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
