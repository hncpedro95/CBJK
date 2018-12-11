<!DOCTYPE html>
<?php
//Segurança
include '../controle/validarLogin.php';
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Cadastro de Usuário</title>
    </head>
    <body>
        
    <!--<center>-->
        <div class="container">
            <div class="well  alert alert-dark text-center"><strong>CADASTRO DE USUÁRIO</strong></div> 
            <form action="../controle/cadastrarUsario.php" method="post" name="cadastrousuario" method="post" enctype="multipart/form-data">

<!--                    <tr>
        <td>Nome do Usuário:</td>
        <td><input type="text" name="nome" size="30" maxlength="90"/></td>
    </tr>-->
<!--                    <tr>
        <td>Login:</td>
        <td><input type="text" name="login" size="10" maxlength="45"/></td>
    </tr>
    <tr>
        <td>Senha:</td>
        <td><input type="password" name="senha" size="10" maxlength="10"/></td>
    </tr>
    <tr>
        <td>Perfil:</td>
        <td> 
            <input type="radio" class="" value="1"name="perfil"/>Administrador
            <input type="radio" value="2" name="perfil"/>Usuário
        </td>
    </tr>  
    <tr>
      <td>Foto do Usuário:</td>
        <td>
            
            <input type="file"  name="foto">
           
        </td>
    </tr> -->

                <div class="form-row"> 

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Nome do Usuário:</label>
                        <input name="nome"type="text" class="form-control" id="nome"  required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="validationCustom01">Login:</label>
                        <input name="login"type="text" class="form-control" id="quantidade"  required>
                    </div>

                    <div class="col-md-3 mb-2">
                        <label for="validationCustom01">Perfil:</label><br>
                        <input type="radio" class="" value="1"name="perfil"/>Administrador
                        <input type="radio" value="2" name="perfil"/>Usuário
                    </div>


                </div>

                <div class="form-row">

                    <div class="col-md-2 mb-3">
                        <label for="validationCustom01">Senha:</label>
                        <input name="senha"type="password" class="form-control" id="preco"  required>
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="validationCustom01">Confirmar Senha:</label>
                        <input name="senha"type="password" class="form-control" id="preco"  required>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <label for="validationCustom01">Foto do Usuário:</label><br>
                    <input type="file"  name="foto">
                </div> <br>

                <input type="submit" class="btn btn-success" value="Cadastrar"/>
                <input type="reset" class="btn btn-primary"  value="Limpar">

                <td colspan="2">
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<div class='alert alert-info'>", $_GET["msg"], "</div>";
                    }
                    ?>
                </td>
            </form> 
        </div>
        <!--</center>-->
    </body>
</html>
