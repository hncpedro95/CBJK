<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <title></title>
    </head>
    <body>
        <div class="well alert alert-dark text-center" ><strong>Cadastro de Cliente</strong></div> 

    </ol>
    <div class="card-body">
        <form action="../controle/cadastrarCliente.php" class="needs-validation" novalidate method="post">
            <div class="form-row">
                <div class="col-md-8 mb-3">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" name="nome" class="form-control" id="nome"  required>
                    <div class="invalid-feedback">
                        Digite o nome do cliente!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="cpf">CPF:</label>
                    <input type="text" maxlength="11"name="cpf" onkeyup="somenteNumeros(this);" class="form-control " id="cpf" required>
                    <div class="invalid-feedback">
                        Digite um número de CPF valido!
                    </div>
                </div>
            </div>
            <div class="form-row">                    
                <div class="col-md-6 mb-3">
                    <label for="endereco">Endereço:</label>
                    <div class="input-group">
                        <input type="text" name="endereco" class="form-control" id="endereco"  aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Digite um endereço!
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="numero">Nº:</label>
                    <input type="text" name="numero" onkeyup="somenteNumeros(this);" class="form-control" id="numero" required>
                    <div class="invalid-feedback">
                        Digite um número de endereço!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="complemento">Complemento:</label>
                    <input type="text" name="complemento" class="form-control" id="complemento" >
                    <div class="valid-feedback">
                        Não é obrigatório !
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-5 mb-3">
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" class="form-control" id="cidade" required>
                    <div class="invalid-feedback">
                        Digite a cidade!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" class="form-control" id="bairro" required>
                    <div class="invalid-feedback">
                        Digite o bairro!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="estado">Estado:</label>
                    <select required="" name="estado" class="form-control " id="estado"  name=Estado">
                        <option value="" >Selecione...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                    <div class="invalid-feedback">
                        Selecione um estado.
                    </div>
                </div>
            </div>
            <div class="form-row">    
                <div class="col-md-5 mb-3">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" maxlength="12" onkeyup="somenteNumeros(this);" class="form-control" id="telefone" >
                    <div class="valid-feedback">
                        Não é obrigatório!
                    </div>
                </div> 
                <div class="col-md-5 mb-3">
                    <label for="celular">Celular:</label>
                    <input type="text" name="celular" maxlength="11" onkeyup="somenteNumeros(this);" class="form-control" id="celular" required>
                    <div class="invalid-feedback">
                        Digite um número de celular valido!
                    </div>
                </div> 
                <div class="col-md-2 mb-3">
                    <label for="whatsapp">Whatsapp:</label>
                    <select required="" name="whatsapp" class="form-control " id="whatsapp"  name=Estado">
                        <option value="s" >Sim</option>
                        <option value="n" >Não</option>
                    </select>
                </div>
            </div>
            <input type="submit" class="btn btn-success" value="Cadastrar"/>
            <input type="reset" class="btn btn-primary"  value="Limpar">
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
<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;

        if (er.test(campo.value)) {
            campo.value = "";
        }
    }
</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

</script>
</body>
</html>
