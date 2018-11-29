<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <title></title>
    </head>
    <body>
        <div class="container">

            <div class="well alert alert-dark text-center" ><strong>Cadastro de Produtos</strong></div> 
            <form action="../controle/cadastrarProduto.php" method="post"enctype="multipart/form-data">



                <div class="form-row">
                    <div class="col-md-10 mb-8">
                        <label for="validationCustom01">Nome:</label>
                        <input name="nome"type="text" class="form-control" id="nome"  required>
                        <div class="valid-feedback">
                            Válido !
                        </div>
                    </div>
                    <div class="col-md-1 mb-2">
                        <label for="validationCustom01">Quantidade:</label>
                        <input name="quantidade"type="text" class="form-control" id="quantidade"  required>
                        <div class="valid-feedback">
                            Válido !
                        </div>
                    </div>
                    <div class="col-md-1 mb-2">
                        <label for="validationCustom01">Preço:</label>
                        <input name="preco"type="text" class="form-control" id="preco"  required>
                        <div class="valid-feedback">
                            Válido !
                        </div>
                    </div>
                </div>


                <input type="submit" class="btn btn-success" value="Cadastrar"/>
                <input type="reset" class="btn btn-primary"  value="Limpar">
                <a href="listarProduto.php.php"><input type="button" class="btn btn-primary" value="Voltar"/></a>                                            

            </form>
        </div>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo "<div class='alert alert-info'>", $_GET["msg"], "</div>";
        }
        ?>
    </center>
</body>
</html>
