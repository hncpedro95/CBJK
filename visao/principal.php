<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
?> 
<html lang="pt_br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/png" href="../Prototipos/Prototipos/cbjk2.jpg" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cestas Basicas JK</title>
        <!-- Bootstrap core CSS-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet" type="text/css">
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index.php" target="centro" >Cestas Basicas JK</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Início">
                        <a class="nav-link" href="index.php" target="centro">
                            <i class="fa fa-fw fa-home"></i>
                            <span class="nav-link-text"> Início</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Clientes">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-users"></i>
                            <span class="nav-link-text">Clientes</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                            <li>
                                <a class="fa fa-fw fa-list" href="listarClientes.php" target="centro">&nbsp;Listar</a>
                            </li>
                            <li>
                                <a class="fa fa-fw fa-plus" href="formCadastrarCliente.php" target="centro">&nbsp;Cadastrar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Finanças">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-dollar"></i>
                            <span class="nav-link-text">Finanças</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                            <li>
                                <a class="fa fa-fw fa-thumbs-down"  href="listarProduto.php" target="centro">&nbsp;Devedores</a>
                            </li>
                            <li>
                                <a class="fa fa-fw fa-check-circle" href="formCadastrarProduto.php "target="centro">&nbsp;Pagos</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Finanças">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUsuarios" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-user"></i>
                            <span class="nav-link-text">Usuários</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseUsuarios">
                            <li>
                                <a class="fa fa-fw fa-list" href="listarUsuarios.php" target="centro">&nbsp;Listar</a>
                            </li>
                            <li>
                                <a class="fa fa-fw fa-plus" href="formCadastrarUsuario.php "target="centro">&nbsp;Cadastrar</a>
                                
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Venda">
                        <a class="nav-link" href="Venda.php" target="centro">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                            <span class="nav-link-text"> Venda</span>
                        </a>
                    </li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Produtos">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#produtos" data-parent="#produtos">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>
                            <span class="nav-link-text">Produtos</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="produtos">
                            <li>
                                <a class="fa fa-fw fa-list" href="listarProduto.php" target="centro">&nbsp;Listar</a>
                            </li>
                            <li>
                                <a class="fa fa-fw fa-plus" href="formCadastrarProduto.php" target="centro">&nbsp;Cadastrar</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Relátorios">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-file-text"></i>
                            <span class="nav-link-text">Relátorios</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseMulti">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                        </ul>
                    </li>


                </ul>
                <ul    class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <img class="rounded-circle"width="50" src="imagens/fotos/<?php echo $_SESSION["foto"];?>"/>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="embed-responsive embed-responsive-1by1">

                    <iframe  class="embed-responsive-item" name="centro" src="index.php"></iframe>

                </div>
                <footer class="sticky-footer">
                    <div class="container">
                        <div class="text-center">
                            <small>Todos os direitos reservados © Cestas JK 2018</small>
                        </div>
                    </div>
                </footer>
               
                <!-- Logout Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sair do Sistema.</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        
                        <div class="modal-body">
                            <img src="imagens/fotos/<?php echo $_SESSION["foto"];?>" width="200" height="150"/><br>
        
        Usuario: <?php echo $_SESSION["usuario"];?><br>
        Login: <?php echo $_SESSION["nome_usuario"];?><br>
        Perfil: <?php echo $_SESSION["perfil"];?><br>
      </div>
                            <div class="modal-body">Deseja realmente sair?</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-primary" href="../controle/efetuarLogoff.php">Sair</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="js/jquery.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
                <!-- Core plugin JavaScript-->
                <script src="js/jquery.easing.min.js"></script>
                <!-- Page level plugin JavaScript-->
                <script src="js/Chart.min.js"></script>
                <script src="js/jquery.dataTables.js"></script>
                <script src="js/dataTables.bootstrap4.js"></script>
                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin.min.js"></script>
                <!-- Custom scripts for this page-->
                <script src="js/sb-admin-datatables.min.js"></script>
                <script src="js/sb-admin-charts.min.js"></script>
            </div>
        </div>      

    </body>
</html>
