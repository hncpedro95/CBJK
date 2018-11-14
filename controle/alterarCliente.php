<?php
require_once '../modelo/Cliente.php';
require_once '../modelo/ClienteDAO.php';
require '../util/funcaoData.php';

$idCliente = $_POST["idcliente"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$dataNascimento = $_POST["dt_nascimento"];
$endereco = $_POST["endereco"];
$sexo = $_POST["sexo"];

$cliente = new Cliente($nome,$cpf,$rg,$dataNascimento,$endereco,$sexo);
$cliente->setIdCliente($idCliente);
$cliente->setNome($nome);
$cliente->setCpf($cpf);
$cliente->setRg($rg);
$cliente->setDataNascimento($dataNascimento);
$cliente->setEndereco($endereco);
$cliente->setSexo($sexo);
//if (empty($novaSenha)) {
 //   $usuario->setSenha($senhaAntiga);
//} else {
   // $usuario->setSenha(md5($novaSenha));
//}

$clienteDAO = new ClienteDAO();
$sucesso = $clienteDAO->alterar($cliente);

if ($sucesso) {
    $msg = "Cliente atualizado com sucesso!";
    header('Location: ../visao/formAlterarCliente.php?idcliente=' 
            . $idCliente . '&msg=' . $msg);
}
/**
 * Crie aqui o controlador que irá receber o dados do formulário /visao/formAlterarCliente.php
 * depois irá instanciar um cliente de Cliente.php e repassar este objeto para classe modelo/ClienteDAO.php
 * através da função alterar($cliente), por ultimo redirecionar a página de volta para formulário /visao/formAlterarCliente.php
 */
