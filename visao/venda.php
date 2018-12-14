<html>
    <?php
//    session_start();
    include '../controle/validarLogin.php';
    include '../modelo/conexao/Conexao.php';
    include '../modelo/ClienteDAO.php';
    include '../modelo/produtoDAO.php';
    include '../modelo/VendaDAO.php';

//    include '../modelo/Cliente.php';
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="js/jquery.dataTables.js"></script>

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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="js/jquery.maskMoney.js"></script>
        <script>
//            function checkTime(i) {
//                if (i < 10) {
//                    i = "0" + i;
//                }
//                return i;
//            }
//
//            function startTime() {
//                var today = new Date();
//                var h = today.getHours();
//                var m = today.getMinutes();
//                var s = today.getSeconds();
//                // add a zero in front of numbers<10
//                m = checkTime(m);
//                s = checkTime(s);
//                //document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
//                setTimeout(function(){ startTime(); }, 3000);
//            }
//            startTime();

            function relogio() {
                var data = new Date();
                var dia = data.getDate();
                var mes = data.getMonth() + 1;
                var ano = data.getFullYear()
                var horas = data.getHours();
                var minutos = data.getMinutes();
                var segundos = data.getSeconds();
                (horas < 10 ? horas = "0" + horas : horas);
                (minutos < 10 ? minutos = "0" + minutos : minutos);
                (segundos < 10 ? segundos = "0" + segundos : segundos);

                var exibe = document.getElementById("time");
                exibe.innerHTML = dia + "/" + mes + "/" + ano + " " + horas + ":" + minutos + ":" + segundos;
            }
            setInterval(relogio, 1000);
            
           
        </script>
      

        <title>Venda</title>        
    </head>
    <body id="page-top">

        <div class="well alert alert-dark text-center"><strong>Venda</strong></div> 
        <div class="card mb-3">
            <!--            <div class="card-header">
                            <i class="fa fa-bar-chart"></i> Bar Chart Example</div>-->
            <div class="card-body">
                <form action="../controle/venda.php" method="post">

                    <div class="row">

                        <div class=" alert col-sm-9 my-auto">
                            <?php
                            $clienteDAO = new ClienteDAO();
                            $clientes = $clienteDAO->listarTodos();

                            $produtoDAO = new ProdutoDAO();
                            $produtos = $produtoDAO->listarTodos();
//                        print_r($produtos);

                            $VendaDAO = new VendaDAO();
                            ?>
                            <div class="form-row">

                                <div class="col-md-4 mb-3">
                                    <label for="vendedor">Vendedor:</label>
                                    <input name="vendedor"type="text" readonly value="<?php echo $_SESSION["nome_usuario"]; ?>" class="form-control" id="vendedor"  required>
                                </div>

                                <div class="col-md-2 mb-3">
                                    <label for="codCliente">Cliente:</label>
                                    <!--<input name="codCliente"type="text" value="" class="form-control" id="codCliente"  required>-->
                                    <!--<select name="codCliente" class="form-control js-example-basic-single" id="codCliente" onchange="getDadosCliente(this.value)">-->
                                    <select name="codCliente" class=" form-control js-example-basic-single" id="codCliente" onchange="getDadosCliente(this.value)">
                                        <option value="">Selecione...</option>
                                        <?php
                                        foreach ($clientes as $cliente) {
                                            echo "<option value='{$cliente->id_cliente}'>{$cliente->id_cliente}-{$cliente->nome_cliente}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <?php
                                foreach ($clientes as $cliente) {
                                    echo "<input type='hidden' id='codCliente{$cliente->id_cliente}' value='{$cliente->id_cliente}'/>";
//                                    echo "<input type='hidden' id='nomeCliente{$cliente->idCliente}' value='{$cliente->nomeC}'/>";
                                }
                                ?>
                                <!--                                <div class="col-md-4 mb-3">
                                                                    <label for="nomeCliente">Nome Cliente:</label>
                                                                    <input name="nomeCliente"type="text" value="" class="form-control" id="nomeCliente"  required>
                                
                                                                </div>-->

                            </div>

                            <div class="form-row">

                                <div class="col-md-2 mb-3">
                                    <label for="produto">Produto:</label>
                                    <select name="produto" class=" form-control js-example-basic-single" id="produto" >
                                        <option value="">Selecione...</option>
                                        <?php
                                        foreach ($produtos as $produto) {
                                            echo "<option value='{$produto->id_produto}'>{$produto->id_produto}-{$produto->nome_produto}</option>";
                                        }
                                        foreach ($produtos as $produto) {
                                            echo "<input type='hidden' id='nomeProduto{$produto->id_produto}' value='{$produto->nome_produto}'>";
                                            echo "<input type='hidden' id='estoqueProduto{$produto->id_produto}' value='{$produto->quantidade}'>";
                                            echo "<input type='hidden' id='valorProduto{$produto->id_produto}' value='{$produto->preco}'>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <?php
                                foreach ($produtos as $produto) {
                                    echo "<input type='hidden' id='codCliente{$produto->id_produto}' value='{$produto->id_produto}'/>";
//                                    echo "<input type='hidden' id='nomeCliente{$cliente->idCliente}' value='{$cliente->nomeC}'/>";
                                }
                                ?>
                                <div class="col-md-2 mb-3">
                                    <label for="qtde">Qtde:</label>
                                    <input name="qtde"type="text" value="" class="form-control" onkeyup="somenteNumeros(this);" id="qtde"  >
                                </div>

                                <div class="col-md-2 mb-3">
                                    <label>&nbsp;</label>
                                    <input type="button" id=""  onclick="adicionaLinha()" class="form-control btn btn-primary" value="Incluir"/>
                                </div>

                                <div class="col-md-2 mb-0">
                                    <label>&nbsp;</label>
                                    <input type="reset" class="form-control btn btn-warning" value="Limpar"/>
                                </div>

                            </div>


                            <div class="table" >
                                <center><h2>Produtos Inseridos</h2></center>
                                <table id="tbl" class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="info">
                                            <th>Cod </th>
                                            <th>Nome </th>
                                            <th>Qtd </th>
                                            <th>Valor Unit. </th>
                                            <th>Subtotal </th>
                                            <th>Remover </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center">
                            <div class="h4 mb-0 text-primary">Venda nº</div>
                            <div class="small text-muted"><label><?php echo $VendaDAO->getProximoNumeroVenda(); ?></label></div>
                            <?php echo "<input type='hidden' name='numeroVenda' value='{$VendaDAO->getProximoNumeroVenda()}'>"; ?>

                            <hr>
                            <div class="h4 mb-0 text-warning">Data</div>
                            <div id="time" class="small text-muted">
                            </div>
                            <hr>
                            <div class="h4 mb-0 text-success">Total</div>
                            <div class="small text-muted"><input type="" id="campoTotalVenda" name="campoTotalVenda" disabled=""></div>
                        </div><!--
                    </div>-->
                    </div>
                    <input type="submit" id="" class="form-control btn btn-success" value="Finalizar Venda"/>
                </form>   
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('.js-example-basic-multiple').select2();
                });
                //Carregar o Select2 na pagina
                $(document).ready(function () {
                    $('.js-example-basic-single').select2();
                });
                // Atribuindo um valor ao input
                function getDadosCliente(id) {
                    $('#codCliente').attr('value', $('#codCliente' + id).val());
                }
                // Atribuindo um valor ao input
                function getDadosProduto(id) {
                    // alert(id);
                    document.getElementById('produto').value = document.getElementById('estoqueProduto' + id).value;
                    document.getElementById('campoValorUnitario').value = document.getElementById('valorProduto' + id).value;
                    document.getElementById('idProdutoSelecionado').value = id;
                    // $('#campoEstoque').attr('value', $('#estoqueProduto'+id).val());
                    // $('#campoValorUnitario').attr('value', $('#valorProduto'+id).val());
                    // $('#idProdutoSelecionado').attr('value', id);
                }
                // Montar O dia Atual
//                document.getElementById("campoData").valueAsDate = new Date();
//                var data = new Date();
//                var dia = data.getDate();
//                var mes = data.getMonth() + 1;
//                var ano = data.getFullYear();
//                var dataCompleta = dia + "/" + mes + "/" + ano;
//                $('#dataAtual').val(dataCompleta);

                // Carregar Tabela Temporaria
                function adicionaLinha() {
                    var id = document.getElementById('produto').value;
                    var qtdeProduto = document.getElementById('qtde').value;
                    if (id != '') {
                        if (qtdeProduto == '') {
                            alert("Informe a quantidade do produto!");
                            return false;
                        }
                        var nomeProduto = document.getElementById('nomeProduto' + id).value;
                        var estoqueProduto = document.getElementById('estoqueProduto' + id).value;
                        var vlunit = document.getElementById('valorProduto' + id).value;
                        var vlTotal = parseFloat(vlunit * qtdeProduto).toFixed(2);

                        var idProdutos = document.querySelectorAll('input[name="idProduto[]"]');
                        for (var i = 0; i < idProdutos.length; i++) {
                            if (idProdutos[i].value == id) {
                                alert("Produto ja inserido!");
                                return false;
                            }
                        }

                        if (parseInt(qtdeProduto) > parseInt(estoqueProduto)) {
                            alert("Estoque insuficiente!");
                            return false;
                        }

                        $("#tbl > tbody").append(
                                "<tr>" +
                                "<td><input size='2' type='text' name='idProduto[]' class='border-0' readonly value='" + id + "'></td>" +
                                "<td><input type='text' class='border-0' readonly value='" + nomeProduto + "'></td>" +
                                "<td><input size='4'type='text' name='qtde[]' class='border-0' value='" + qtdeProduto + "'></td>" +
                                "<td><input size='6' type='text' name='' class='border-0' value='" + vlunit + "'></td>" +
                                "<td><input size='10' type='text' name='totalProd[]' class='border-0' value='" + vlTotal + "'></td>" +
                                "<td><i onclick='removeLinha(this)' class='fa fa-trash text-danger' style='font-size: 20px;'></i></td>" +
                                "</tr>"
                                );
                        calcularValorTotal();
                        document.getElementById('qtde').value = "";
                        $("#produto").select2("val", "-");
                    } else {
                        alert("Selecione um produto!");
                    }
                }
                function calcularValorTotal() {
                    var totalVenda = 0;
                    var totalProdutos = document.querySelectorAll('input[name="totalProd[]"]');
                    for (var i = 0; i < totalProdutos.length; i++) {
                        totalVenda += parseFloat(totalProdutos[i].value);
                    }
                    $('#campoTotalVenda').attr('value', totalVenda);
                }
                function removeLinha(linha) {
                    var i = linha.parentNode.parentNode.rowIndex;
                    document.getElementById('tbl').deleteRow(i);
                    calcularValorTotal();
                }
            </script>
            <script>
                function somenteNumeros(num) {
                    var er = /[^0-9.]/;
                    er.lastIndex = 0;
                    var campo = num;
                    if (er.test(campo.value)) {
                        campo.value = "";
                    }
                }
            </script>
        </div>
    </body>
</html>
