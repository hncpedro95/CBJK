<?php
////session_start();
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//echo $_SESSION['id_usuario'];
////exit();

session_start();
require_once '../modelo/conexao/Conexao.php';
require_once "../modelo/venda.php";
require_once "../modelo/itensVenda.php";
require_once "../modelo/VendaDAO.php";
$idVendedor = $_SESSION['id_usuario'];
$idCliente = $_POST['codCliente'];
$totalVenda = $_POST['campoTotalVenda'];
$data = date('Y-m-d');
$numero_pedido = $_POST['numeroVenda'];

$venda = new Venda($idCliente, $_SESSION['id_usuario'], $totalVenda, $data, $numero_pedido);
$vendaDAO = new VendaDAO();
$sucessoVenda = $vendaDAO->registrarVenda($venda);
    if($sucessoVenda){
        $idVenda = $_SESSION['ultimoIdvenda'];
        for($i = 0; $i < count($_POST['idProduto']); $i++){
        
            $itemVenda = new ItensVenda($_POST['idProduto'][$i], $idVenda, $_POST['qtde'][$i]);
//            print_r($itemVenda);echo "<br>";?
            $itensVendaDAO = new VendaDAO();
            $sucessoItem = $itensVendaDAO->inserirItensVenda($itemVenda);
        }
        if ($sucessoItem) {
            echo "<script>
                alert('Venda realizada com sucesso!');
            window.location.replace('../visao/venda.php');
            </script>";
        }
}

