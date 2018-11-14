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
$fabricante = $_POST["fabricante"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];

if (isset($_FILES["fotoProduto"])){
    require_once '../modelo/Upload.class.php';
    $upload = new upload($_FILES["fotoProduto"], "../visao/imagens/fotosProdutos/");
    if ($upload->processed){
        $foto_produto = $upload->file_dst_name;
    }
}


$novoProduto = new produto($nome,$fabricante,$quantidade,$preco,$foto_produto);
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