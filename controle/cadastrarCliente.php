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
echo '<pre>';
print_r($_POST);
echo '</pre>';


$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$whatsapp = $_POST["whatsapp"];




$novoCliente = new Cliente($nome, $cpf, $endereco, $numero, $complemento, $estado, $cidade,
        $telefone, $celular, $whatsapp);
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