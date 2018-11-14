<?php
require_once '../modelo/produto.php';
require_once '../modelo/produtoDAO.php';

$idProduto = $_POST["idProduto"];

$produtoAlterado = new produto($_POST["nome"], $_POST["fabricante"], $_POST["quantidade"], $_POST["preco"]);
$produtoAlterado->setIdProduto($idProduto);

$produtoDAO = new produtoDAO();

$sucesso = $produtoDAO->editar($produtoAlterado);

if ($sucesso) {
    $msg = "Produto atualizado com sucesso!";
    header('Location: ../visao/formAlterarProduto.php?idProduto=' 
            . $idProduto . '&msg=' . $msg);
}
/**
 * Crie aqui o controlador que irá receber o dados do formulário /visao/formAlterarCliente.php
 * depois irá instanciar um cliente de Cliente.php e repassar este objeto para classe modelo/ClienteDAO.php
 * através da função alterar($cliente), por ultimo redirecionar a página de volta para formulário /visao/formAlterarCliente.php
 */
