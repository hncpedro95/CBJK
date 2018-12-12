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

function relogio(){
	var data = new Date();
        var dia = data.getDate();
        var mes = data.getMonth()+1;
        var ano = data.getFullYear()
	var horas = data.getHours();
	var minutos = data.getMinutes();
	var segundos = data.getSeconds();
        (horas < 10 ? horas = "0"+horas: horas);
        (minutos < 10 ? minutos = "0"+minutos: minutos);
        (segundos < 10 ? segundos = "0"+segundos: segundos);
        
	var exibe = document.getElementById("time");
	exibe.innerHTML = dia+"/"+mes+"/"+ano +" "+horas + ":" + minutos + ":" + segundos;
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
                <form action="../controle/alterarProduto.php" method="post">
                    <input type="hidden" name="idProduto" value=""/>
                    <div class="form-row">
                        <div class="col-md-2 mb-0">
                            <label for="validationCustom01">Cod. Cliente:</label>
                            <input name="nome"type="text" value="" class="form-control" id="nome"  required>
                        </div>

                        <div class="col-md-4 mb-0">
                            <label for="validationCustom01">Descrição Produto:</label>
                            <input name="quantidade"type="text" value="" class="form-control" id="quantidade"  required>

                        </div>
                        <div class="col-md-1 mb-0">
                            <label for="validationCustom01">Qtde:</label>
                            <input name="preco"type="text" value="" class="form-control" id="preco"  required>

                        </div>
                        <div class="col-md-2 mb-0">
                            <br>
                            <input type="submit" class="form-control btn btn-success" value="Incluir"/>
                        </div>

                        <div class="col-md-2 mb-0">
                            <br>

                            <input type="reset" class="form-control btn btn-warning" value="Limpar"/>
                        </div>
                    </div>

<!--<input type="reset" class="btn btn-primary"  value="Limpar">-->
<!--<a href="listarProduto.php"><input type="button" class="btn btn-primary" value="Voltar"/></a>-->
                </form>    
                <div class="row">
                    <div class=" alert col-sm-8 my-auto">
                        <!--<canvas id="myBarChart" width="100" height="50"></canvas>-->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="info">
                                        <th>Cod </th>
                                        <th>Nome </th>
                                        <th>Desc </th>
                                        <th>Qtd </th>
                                        <th>Total </th>
                                        <th>Data </th>
                                        <th>Hora </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
//                                    $UsuarioDAO = new UsuarioDAO();
//                                    $Usuarios = $UsuarioDAO->listarTodos();
                                    foreach ($Usuarios as $usuario) {
                                        echo "<tr>";
                                        echo "  <td> {$usuario->nome} </td>";
                                        echo "  <td> {$usuario->login} </td>";
                                        echo "  <td> {$usuario->perfil} </td>";
                                        echo "  <td>" . dateUStoDateBR($usuario->dt_cadastro) . "</td>";
                                        echo "  <td align='center'>"
                                        . "     <a href='../controle/excluirUsuario.php?idusuario={$usuario->id_usuario}'><i class='glyphicon glyphicon-remove'></i></a>"
                                        . " </td>";
                                        echo "  <td align='center'> <a href='formAlterarUsuario.php?idusuario={$usuario->id_usuario}'><i class='glyphicon glyphicon-pencil'></i></a></td>";
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
                    </div>
                    <div class="col-sm-4 text-center my-auto">
                        <div class="h4 mb-0 text-primary">Venda nº</div>
                        <div class="small text-muted"><label><?php ?></label></div>
                        <hr>
                        <div class="h4 mb-0 text-warning">Data</div>
                        <div id="time" class="small text-muted">
                        </div>
                        <hr>
                        <div class="h4 mb-0 text-success">Subtotal</div>
                        <div class="small text-muted"><?php ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
