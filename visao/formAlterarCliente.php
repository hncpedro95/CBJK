<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
require_once '../modelo/ClienteDAO.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Alterar Cliente</title>
    </head>
    <body>
        <?php
        $idCliente = $_GET["idcliente"];
        $clienteDAO = new ClienteDAO();
        $cliente=$clienteDAO->getCliente($idCliente);
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="principal.php" target="_parent">Início</a>
            </li>
            <li class="breadcrumb-item "> <a href="#">Clientes</a></li>
            <li class="breadcrumb-item active"> Listar</li>

        </ol>
        <div class="container">
            <div class="well"><strong>Alterar Cliente</strong></div> 
            <form action="../controle/alterarCliente.php" method="post">
                                <input type="hidden" name="idcliente" value="<?php echo $cliente->id_cliente; ?>"/>

                <table class="table">
                    <tr>
                        <td>Nome Completo:</td>
                        <td><input type="text" name="nome" size="50"  value="<?php echo $cliente->nome; ?>"/></td>
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td><input type="text" name="cpf"  value="<?php echo $cliente->cpf; ?>"/></td>
                    </tr>                
                    <tr>
                        <td>Endereço:</td>
                        <td><input type="text" name="endereco" value="<?php echo $cliente->endereco; ?>"/></td>
                    </tr>                                
                    <tr>
                        <td>Nº:</td>
                        <td><input type="text" name="numero" value="<?php echo $cliente->numero; ?>"/></td>
                    </tr>                                                
                    <tr>
                        <td>Complemento:</td>
                        <td><input type="text" name="complemento" value="<?php echo $cliente->complemento; ?>"/></td>
                    </tr>                                                
                    <tr>
                        <td>Estado</td>
                        <td>
                            <select name="estado">
                                <option <?php $cliente->estado=="volvo"?"selected":""; ?> value="volvo">AC</option>
                                
                                <option value="saab">AL</option>
                                <option value="opel">AP</option>
                                <option value="audi">AM</option>
                                <option value="volvo">BA</option>
                                <option value="saab">CE</option>
                                <option value="df">DF</option>
                                <option value="audi">ES</option>
                                <option value="go">GO</option>
                                <option value="saab">MA</option>
                                <option value="opel">MT</option>
                                <option value="audi">MS</option>
                                <option value="volvo">MG</option>
                                <option value="saab">PA</option>
                                <option value="opel">PB</option>
                                <option value="audi">PR</option>
                                <option value="volvo">PE</option>
                                <option value="saab">PI</option>
                                <option value="opel">RJ</option>
                                <option value="audi">RN</option>
                                <option value="volvo">RS</option>
                                <option value="saab">RO</option>
                                <option value="opel">RR</option>
                                <option value="audi">SC</option>
                                <option value="volvo">SP</option>
                                <option value="saab">SE</option>
                                <option value="opel">TO</option>
                               
                            </select>
                        </td>
                    </tr>                                
                    <tr>
                        <td>Cidade:</td>
                        <td><input type="text" size="60" name="cidade" value="<?php echo $cliente->cidade; ?>"/></td>
                    </tr>                                                
                    <tr>
                        <td>Telefone:</td>
                        <td><input type="text" size="60" name="telefone" value="<?php echo $cliente->telefone; ?>"/></td>
                    </tr>                                                
                    <tr>
                        <td>Celular:</td>
                        <td><input type="text" size="60" name="celular" value="<?php echo $cliente->celular; ?>"/></td>
                    </tr>                                                
                    <tr>
                        <td>Whatsapp:</td>
                        <td>
                            <select name="whatsapp">
                                <option value="s">Sim</option>
                                <option value="n">Não</option>
                            </select>
                        </td>
                    </tr>                                                
                    <tr>                    
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Alterar"/>
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
