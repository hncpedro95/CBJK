<?php
require_once '../modelo/produtoDAO.php';

//recebe o id do cliente pela URL
$idProduto = $_GET["idProduto"];
$produtoDAO = new produtoDAO();
$sucesso = $produtoDAO->excluir($idProduto);

if ($sucesso){
   $msg = "Produto excluido com sucesso!"; 
}else{
   $msg = "Erro ao excluir o Produto!";  
}

header('Location: ../visao/listarProduto.php?&msg='.$msg);
/**
 * Crie aqui o controlador que irá receber o ID do cliente via GET
 * e repassar o ID para classe modelo/ClienteDAO.php
 * através da função excluir($idCliente), por ultimo redirecionar a página de volta para formulário /visao/listarUsuarios.php
 */
