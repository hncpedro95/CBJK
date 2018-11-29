<?php
require_once '../modelo/Cliente.php';
require_once '../modelo/ClienteDAO.php';
require '../util/funcaoData.php';

$idCliente = $_POST["idcliente"];
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


$cliente = new Cliente($nome, $cpf, $endereco, $numero, $complemento, $estado, $cidade, $telefone, $celular, $whatsapp);
$cliente->setIdCliente($idCliente);



//if (empty($novaSenha)) {
 //   $usuario->setSenha($senhaAntiga);
//} else {
   // $usuario->setSenha(md5($novaSenha));
//}

$clienteDAO = new ClienteDAO();
$sucesso = $clienteDAO->alterar($cliente);

if ($sucesso) {
    $msg = "Cliente atualizado com sucesso!";
    header('Location: ../visao/listarClientes.php?msg=' . $msg);
}
 else {
    echo 'Erro ao alterar cliente';    
}
/**
 * Crie aqui o controlador que irá receber o dados do formulário /visao/formAlterarCliente.php
 * depois irá instanciar um cliente de Cliente.php e repassar este objeto para classe modelo/ClienteDAO.php
 * através da função alterar($cliente), por ultimo redirecionar a página de volta para formulário /visao/formAlterarCliente.php
 */
