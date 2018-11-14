<?php
require_once '../modelo/ClienteDAO.php';

//recebe o id do cliente pela URL
$idCliente = $_GET["idcliente"];
$clienteDAO = new ClienteDAO();
$sucesso = $clienteDAO->excluir($idCliente);

if ($sucesso){
   $msg = "Usuário excluido com sucesso!"; 
}else{
   $msg = "Erro ao excluir o Cliente!";  
}

header('Location: ../visao/listarClientes.php?&msg='.$msg);
/**
 * Crie aqui o controlador que irá receber o ID do cliente via GET
 * e repassar o ID para classe modelo/ClienteDAO.php
 * através da função excluir($idCliente), por ultimo redirecionar a página de volta para formulário /visao/listarUsuarios.php
 */
