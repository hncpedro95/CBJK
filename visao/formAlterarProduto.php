<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
require_once '../modelo/produtoDAO.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.maskMoney.js"></script>
        <title></title>
    </head>
    <body>
        <?php
        $idProduto = $_GET["idProduto"];
        $produtoDAO = new produtoDAO();
        $produto = $produtoDAO->getProduto($idProduto);
        ?>
        <div class="container">
            <div class="well"><strong>Atualização de Produtos</strong></div> 
            <form action="../controle/alterarProduto.php" method="post">
                <input type="hidden" name="idProduto" value="<?php echo $produto->id_produto; ?>"/>
                <div class="form-row">
                    <div class="col-md-9 mb-8">
                        <label for="validationCustom01">Nome:</label>
                        <input name="nome"type="text" value="<?php echo $produto->nome_produto; ?>" class="form-control" id="nome"  required>
                        <div class="valid-feedback">
                            Válido !
                        </div>
                    </div>
                    <div class="col-md-1 mb-2">
                        <label for="validationCustom01">Quantidade:</label>
                        <input name="quantidade"type="text" value="<?php echo $produto->quantidade; ?>" maxlength="4" class="form-control" id="quantidade"  required>
                        <div class="valid-feedback">
                            Válido !
                        </div>
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom01">Preço:</label>
                        <input name="preco" type="text" value="<?php echo $produto->preco; ?>" class="form-control" id="preco"  required>
                        <div class="valid-feedback">
                            Válido !
                        </div>
                    </div>

                </div>
                <input type="submit" class="btn btn-success" value="Alterar"/>
                <input type="reset" class="btn btn-primary"  value="Limpar">
                <a href="listarProduto.php"><input type="button" class="btn btn-primary" value="Voltar"/></a>

            </form>
        </div>
        <script>
  $(function() {
    $('#preco').maskMoney();
  })
</script>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo "<div class='alert alert-info'>", $_GET["msg"], "</div>";
        }
        ?>
    </center>
</body>
</html>
