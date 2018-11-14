<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <title></title>
    </head>
    <body>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="principal.php" target="_parent">Início</a>
            </li>
            <li class="breadcrumb-item "> <a href="#">Clientes</a></li>
            <li class="breadcrumb-item active"> Listar</li>

        </ol>
        <div class="container">
            <div class="well"><strong>Cadastro de Usuário</strong></div> 
            <form action="../controle/cadastrarCliente.php" method="post">
                <table class="table">
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" size="50"/></td>
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td><input type="text" name="cpf"/></td>
                    </tr>                
                    <tr>
                        <td>RG:</td>
                        <td><input type="text" name="rg"/></td>
                    </tr>                                
                    <tr>
                        <td>Data de Nascimento:</td>
                        <td><input type="date" name="dt_nascimento"/></td>
                    </tr>                                                
                    <tr>
                        <td>Sexo:</td>
                        <td>
                            Masculino <input required="true" type="radio" name="sexo" value="M"/>
                            Feminino <input  required="true" type="radio" name="sexo" value="F"/>
                        </td>
                    </tr>                                
                    <tr>
                        <td>Endereço:</td>
                        <td><input type="text" size="60" name="endereco"/></td>
                    </tr>                                                
                    <tr>                    
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Cadastrar"/>
                            <input type="reset" class="btn btn-primary"  value="Limpar">
                            <a href="listarClientes.php"><input type="button" class="btn btn-primary" value="Voltar p/ lista"/></a>
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
