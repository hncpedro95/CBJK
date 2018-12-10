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
        $cliente = $clienteDAO->getCliente($idCliente);
        ?>
        <!--<div class="container">-->
            <div class="well alert alert-dark text-center" ><strong>Alterar Cliente</strong></div> 
            <form action="../controle/alterarCliente.php" method="post">
                <input type="hidden" name="idcliente" value="<?php echo $cliente->id_cliente; ?>"/>
        <div class="card-body">
                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="nome">Nome Completo:</label>
                        <input type="text" value="<?php echo $cliente->nome; ?>" name="nome" class="form-control" id="nome"  required>
                        <div class="invalid-feedback">
                            Digite o nome do cliente!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="cpf">CPF:</label>
                        <input type="text" value="<?php echo $cliente->cpf; ?>" name="cpf" class="form-control" id="cpf" required>
                        <div class="invalid-feedback">
                            Digite um número de CPF valido!
                        </div>
                    </div>
                </div>
                <div class="form-row">                    
                    <div class="col-md-6 mb-3">
                        <label for="endereco">Endereço:</label>
                        <div class="input-group">
                            <input type="text" value="<?php echo $cliente->endereco; ?>"  name="endereco" class="form-control" id="endereco"  aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Digite um endereço!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="numero">Nº:</label>
                        <input type="text" value="<?php echo $cliente->numero; ?>" name="numero" class="form-control" id="numero" required>
                        <div class="invalid-feedback">
                            Digite um número de endereço!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="complemento">Complemento:</label>
                        <input type="text" value="<?php echo $cliente->complemento; ?>" name="complemento" class="form-control" id="complemento" >
                        <div class="valid-feedback">
                            Não é obrigatório !
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-5 mb-3">
                        <label for="cidade">Cidade:</label>
                        <input type="text" value="<?php echo $cliente->cidade; ?>" name="cidade" class="form-control" id="cidade" required>
                        <div class="invalid-feedback">
                            Digite a cidade!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="bairro">Bairro:</label>
                        <input type="text" value="<?php echo $cliente->bairro; ?>" name="bairro" class="form-control" id="bairro" required>
                        <div class="invalid-feedback">
                            Digite o bairro!
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="estado">Estado:</label>
                        <select required="" name="estado" class="form-control " id="estado"  name=Estado">
                            <option value="" >Selecione...</option>
                            <option <?php echo $cliente->estado == "AC" ? "selected" : ""; ?> value="AC">Acre</option>
                            <option <?php echo $cliente->estado == "AL" ? "selected" : ""; ?> value="AL">Alagoas</option>
                            <option <?php echo $cliente->estado == "AP" ? "selected" : ""; ?> value="AP">Amapá</option>
                            <option <?php echo $cliente->estado == "AM" ? "selected" : ""; ?> value="AM">Amazonas</option>
                            <option <?php echo $cliente->estado == "BA" ? "selected" : ""; ?> value="BA">Bahia</option>
                            <option <?php echo $cliente->estado == "CE" ? "selected" : ""; ?> value="CE">Ceará</option>
                            <option <?php echo $cliente->estado == "DF" ? "selected" : ""; ?> value="DF">Distrito Federal</option>
                            <option <?php echo $cliente->estado == "ES" ? "selected" : ""; ?> value="ES">Espírito Santo</option>
                            <option <?php echo $cliente->estado == "GO" ? "selected" : ""; ?> value="GO">Goiás</option>
                            <option <?php echo $cliente->estado == "MA" ? "selected" : ""; ?> value="MA">Maranhão</option>
                            <option <?php echo $cliente->estado == "MT" ? "selected" : ""; ?> value="MT">Mato Grosso</option>
                            <option <?php echo $cliente->estado == "MS" ? "selected" : ""; ?> value="MS">Mato Grosso do Sul</option>
                            <option <?php echo $cliente->estado == "MG" ? "selected" : ""; ?> value="MG">Minas Gerais</option>
                            <option <?php echo $cliente->estado == "PA" ? "selected" : ""; ?> value="PA">Pará</option>
                            <option <?php echo $cliente->estado == "PB" ? "selected" : ""; ?> value="PB">Paraíba</option>
                            <option <?php echo $cliente->estado == "PR" ? "selected" : ""; ?> value="PR">Paraná</option>
                            <option <?php echo $cliente->estado == "PE" ? "selected" : ""; ?> value="PE">Pernambuco</option>
                            <option <?php echo $cliente->estado == "PI" ? "selected" : ""; ?> value="PI">Piauí</option>
                            <option <?php echo $cliente->estado == "RJ" ? "selected" : ""; ?> value="RJ">Rio de Janeiro</option>
                            <option <?php echo $cliente->estado == "RN" ? "selected" : ""; ?> value="RN">Rio Grande do Norte</option>
                            <option <?php echo $cliente->estado == "RS" ? "selected" : ""; ?> value="RS">Rio Grande do Sul</option>
                            <option <?php echo $cliente->estado == "RO" ? "selected" : ""; ?> value="RO">Rondônia</option>
                            <option <?php echo $cliente->estado == "RR" ? "selected" : ""; ?> value="RR">Roraima</option>
                            <option <?php echo $cliente->estado == "SC" ? "selected" : ""; ?> value="SC">Santa Catarina</option>
                            <option <?php echo $cliente->estado == "SP" ? "selected" : ""; ?> value="SP">São Paulo</option>
                            <option <?php echo $cliente->estado == "SE" ? "selected" : ""; ?> value="SE">Sergipe</option>
                            <option <?php echo $cliente->estado == "TO" ? "selected" : ""; ?> value="TO">Tocantins</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecione um estado.
                        </div>
                    </div>
                </div>
                <div class="form-row">    
                    <div class="col-md-5 mb-3">
                        <label for="telefone">Telefone:</label>
                        <input type="text" value="<?php echo $cliente->telefone; ?>" name="telefone" class="form-control" id="telefone" >
                        <div class="valid-feedback">
                            Não é obrigatório!
                        </div>
                    </div> 
                    <div class="col-md-5 mb-3">
                        <label for="celular">Celular:</label>
                        <input type="text" value="<?php echo $cliente->celular; ?>" name="celular" class="form-control" id="celular" required>
                        <div class="invalid-feedback">
                            Digite um número de celular valido!
                        </div>
                    </div> 
                    <div class="col-md-2 mb-3">
                        <label for="whatsapp">Whatsapp:</label>
                        <select required="" value="<?php echo $cliente->whatsapp; ?>" name="whatsapp" class="form-control " id="whatsapp"  name=Estado">
                            <option value="s" >Sim</option>
                            <option value="n" >Não</option>
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="Alterar"/>
                <a href="listarClientes.php"><input type="button" class="btn btn-primary" value="Voltar p/ lista"/></a>
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
