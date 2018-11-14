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
            <div class="well"><strong>Cadastro de Produtos</strong></div> 
            <form action="../controle/cadastrarProduto.php" method="post"enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" size="50"/></td>
                    </tr>
                    <tr>
                        <td>Fabricante:</td>
                        <td><input type="text" name="fabricante"/></td>
                    </tr>                
                    <tr>
                        <td>Quantidade:</td>
                        <td><input type="text" name="quantidade"/></td>
                    </tr>                                
                    <tr>
                        <td>Preço:</td>
                        <td><input type="text" name="preco"/></td>
                    </tr>                                                
                    <tr>
                        <td>foto:</td>
                        <td><input type="file" name="fotoProduto"/></td>
                    </tr>                                
                                                                  
                    <tr>                    
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Cadastrar"/>
                            <input type="reset" class="btn btn-primary"  value="Limpar">
                            <a href="listarProduto.php.php"><input type="button" class="btn btn-primary" value="Voltar"/></a>
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
