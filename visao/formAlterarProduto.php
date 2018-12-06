
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
                    <div class="col-md-10 mb-8">
                        <label for="validationCustom01">Nome:</label>
                        <input name="nome"type="text" value="<?php echo $produto->nome; ?>" class="form-control" id="nome"  required>
                        <div class="valid-feedback">
                            Válido !
                        </div>
                    </div>
                    <div class="col-md-1 mb-2">
                        <label for="validationCustom01">Quantidade:</label>
                        <input name="quantidade"type="text" value="<?php echo $produto->quantidade; ?>" class="form-control" id="quantidade"  required>
                        <div class="valid-feedback">
                            Válido !
                        </div>
                    </div>
                    <div class="col-md-1 mb-2">
                        <label for="validationCustom01">Preço:</label>
                        <input name="preco"type="text" value="<?php echo $produto->preco; ?>" class="form-control" id="preco"  required>
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

<!--<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
require_once '../modelo/produtoDAO.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         Bootstrap (currently v3.3.7) CSS 
        <link rel="stylesheet" href="css/bootstrap.css">
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
                <input type="hidden" name="id_produto"value="<?php echo $produto->id_produto;?>"/>
                <table class="table">
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" value="<?php echo $produto->nome;?>" size="50"/></td>
                    </tr>
                    <tr>
                        <td>Quantidade:</td>
                        <td><input type="text" name="quantidade" value="<?php echo $produto->quantidade;?>"/></td>
                    </tr>                                
                    <tr>
                        <td>Preço:</td>
                        <td><input type="text" name="preco" value="<?php echo $produto->preco;?>"/></td>
                    </tr>                                                
                    <tr>                    
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Alterar"/>
                            <input type="reset" class="btn btn-primary"  value="Limpar">
                            <a href="listarProduto.php"><input type="button" class="btn btn-primary" value="Voltar"/></a>
                        </td>
                    </tr>                                                                
                </table>
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

