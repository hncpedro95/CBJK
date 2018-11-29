<?php
require_once '../modelo/produto.php';
require_once '../modelo/produtoDAO.php';
require '../util/funcaoData.php';
session_start();
/**
 * Crie aqui o controlador que irá receber o dados do formulário /visao/formCadastrarCliente.php
 * depois irá instanciar um cliente de Cliente.php e repassar este objeto para classe modelo/ClienteDAO.php
 * através da função cadastrar($cliente), por ultimo redirecionar a página de volta para formulário /visao/listarUsuarios.php
 */
//print_r($_POST);
$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];


$novoProduto = new produto($nome,$quantidade,$preco);
$novoProduto->setIdProduto($_SESSION["id_usuario"]);
//var_dump($novoCliente);  exit();
$produtoDAO = new produtoDAO();
$cadastrado = $produtoDAO->cadastrar($novoProduto);

if ($cadastrado){
    $msg = "Produto Cadastrado com sucesso !";
    header('Location: ../visao/listarProduto.php?msg='.$msg);
} else {
  echo "Erro ao cadastrar !";    
}