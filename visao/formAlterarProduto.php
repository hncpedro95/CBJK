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
