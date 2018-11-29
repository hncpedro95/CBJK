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
            <div class="well alert alert-dark text-center" ><strong>Cadastro de Cliente</strong></div> 
            <form action="../controle/cadastrarCliente.php" class="needs-validation" novalidate method="post">
                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="validationCustom01">Nome Completo:</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Válido !
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">CPF:</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                    </div>
                </div>
                <div class="form-row">                    
                    <div class="col-md-6 mb-3">
                        <label for="validationCustomUsername">Endereço:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom03">Nº:</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom05">Complemento:</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-5 mb-3">
                        <label for="validationCustom03">Cidade:</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">Bairro:</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Estado:</label>
                        <select required="" class="form-control " id="validationCustom01"  name=Estado">
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
                <button class="btn btn-primary " type="submit">Submit form</button>
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
