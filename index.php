<!DOCTYPE html>
<html lang="pt_br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="Prototipos/Prototipos/cbjk2.jpg" />
        <title>Sistemas P&JP - Cestas de alimentos JK </title>
        <!-- Bootstrap core CSS-->
        <link href="visao/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="visao/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="visao/css/sb-admin.css" rel="stylesheet">
        <link href="visao/css/estilo.css" rel="stylesheet">
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login - Cestas de alimentos JK</div>
                <div class="card-body">
                    <form action="controle/efetuarLogin.php" method="post" id="formlogin">

                        <div class="form-group">
              <!--               <p id="logologin">
                              <img src="visao/imagens/faculdadeMaua.png" alt="Logo"/>
                          </p>-->
                            <label for="exampleInputEmail1">Usuário</label>
                            <input required="" name="login" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Digite Usuário">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input required="" name="senha"class="form-control" id="exampleInputPassword1" type="password" placeholder="Senha">
                        </div>
                        <div class="form-group">
                        </div>
                        <input type="submit" data-target="exampleModal"  class="btn btn-primary btn-block " value="Entrar"/>
                        <input type="reset" class="btn btn-primary btn-block" value="Limpar"/>

                        <footer>
                            Sistema 1.0 &COPY; <?php $date = date("Y");
echo " $date"; ?>
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    <center>

        <?php
        if (!empty($_GET["msg"])) {
            echo "<div id='error'>", $_GET["msg"], "</div>";
        }
        ?>
    </center>

    <!-- Bootstrap core JavaScript-->
    <script src="visao/js/jquery.min.js"></script>
    <script src="visao/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="visao/js/jquery.easing.min.js"></script>
</body>

</html>
