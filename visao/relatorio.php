<?php
require_once "../controle/validarLogin.php";
require_once "../modelo/conexao/Conexao.php";
require_once '../modelo/VendaDAO.php';
require_once '../util/funcaoData.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Relatorios Financeiros</title>
        <!-- Bootstrap core CSS-->
        <!-- Bootstrap CSS-->
        <!--        <link rel="stylesheet" href="../../../vendor/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="../../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
                <link rel="stylesheet" href="../../../css/dataTables.bootstrap4.min.css">-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <div class="well alert alert-dark text-center"><strong>Relátorios</strong></div> 

        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="" method="post">
                            <!--                            <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Vendas
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Compras
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                            <label class="form-check-label" for="exampleRadios3">
                                                                Lucros
                                                            </label>
                                                        </div>-->

                            <!--</div>-->

                            <div class="card mb-5">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Codigo Venda</th>
                                                    <th>Cliente</th>
                                                    <th>Vendedor</th>
                                                    <th>produtos</th>
                                                    <th>Data da Venda</th>
                                                    <th>Total da venda</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $vendaDAO = new VendaDAO();
                                                $vendas = $vendaDAO->listarVendas();
                                                $totalVendas = 0;
                                                foreach ($vendas as $venda) {
                                                    echo "<tr>";
                                                    echo "  <td> {$venda->numero_pedido} </td>";
                                                    echo "  <td> {$venda->nome_cliente} </td>";
                                                    echo "  <td> {$venda->nome_usuario} </td>";
                                                    echo "  <td> {$venda->nome_produto} </td>";
                                                    echo "  <td> {$venda->data} </td>";
                                                    echo "  <td> {$venda->valor_total} </td>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
                            </div>
                            <div class="row">
<!--                                <div class="form-group col-2">
                                    <label for="inputNomeFantasia">Total de vendas</label>
                                    <input type="text" disabled class="form-control" id="inputNomeFantasia" placeholder="Qtde. p/ alerta" value="<?php echo $totalVendas ?>">
                                </div>-->


                            </div>
                            <div>
                                <a href='../controle/relatorioVendas.php?id=0' class="btn btn-primary"><i class="fa fa-print"></i> Imprimir</a>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="../visao/js/jquery.min.js"></script>
        <!--<script src="../../../node_modules/popper.js/dist/popper.min.js"></script>-->
        <script src="../visao/js/bootstrap.js"></script>
        <script src="../visao/js/jquery.dataTables.js"></script>
        <script src="../visao/js/dataTables.bootstrap4.js"></script>
        <!--<script src="../arquivosExternos/meusScripts.js"></script>-->

    </body>

</html>