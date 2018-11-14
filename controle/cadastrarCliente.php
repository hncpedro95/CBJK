<?php
require_once '../modelo/Cliente.php';
require_once '../modelo/ClienteDAO.php';
require '../util/funcaoData.php';
session_start();
/**
 * Crie aqui o controlador que irá receber o dados do formulário /visao/formCadastrarCliente.php
 * depois irá instanciar um cliente de Cliente.php e repassar este objeto para classe modelo/ClienteDAO.php
 * através da função cadastrar($cliente), por ultimo redirecionar a página de volta para formulário /visao/listarUsuarios.php
 */
print_r($_POST);
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$dataNascimento = $_POST["dt_nascimento"];
$endereco = $_POST["endereco"];
if(!isset($_POST["sexo"])){
    $erro = "Selecione uma opção do campo Sexo !";
    header('Location:../visao/formCadastrarCliente.php?msg='.$erro);
}

$sexo = $_POST["sexo"];

$novoCliente = new Cliente($nome,$cpf,$rg,$dataNascimento,$endereco,$sexo);
$novoCliente->setId_usuario($_SESSION["id_usuario"]);
//var_dump($novoCliente);  exit();
$clienteDAO = new ClienteDAO();
$cadastrado = $clienteDAO->cadastrar($novoCliente);

if ($cadastrado){
    $msg = "Cliente Cadastrado com sucesso !";
    header('Location: ../visao/listarClientes.php?msg='.$msg);
} else {
  echo "Erro ao cadastrar !";    
}