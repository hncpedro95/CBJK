<?php

require_once '../modelo/conexao/conexao.php';
require_once "../modelo/RelatorioDAO.php";
require_once "../modelo/VendaDAO.php";
require_once "../vendor/autoload.php";
require_once "../util/funcaoData.php";
$relatorioDAO = new RelatorioDAO();
print_r($_GET);
if ($_GET['id'] == 0) {
    $vendaDAO = new VendaDAO();
    $vendas = $vendaDAO->listarVendas();
    $row = "";
    $cont = 0;
    foreach ($vendas as $venda) {
        $cont++;
        $row .= '<tr>
                    <td> ' . $venda->numero_pedido . ' </td>
                    <td> ' . $venda->nome_cliente . ' </td>
                    <td> ' . $venda->nome_usuario . ' </td>
                    <td> ' . $venda->nome_produto . ' </td>
                    <td> ' . $venda->data . ' </td>
                    <td> ' . $venda->valor_total . ' </td>
                </tr>';
    }

    $css = file_get_contents('../visao/css/style.css');
    $tabela = '  <div class="row">
    <div class="">
      <h1>Relatório</h1>
    </div>
  </div>
  <table class="table">
  <thead>
    <tr>
        <th>Codigo Venda</th>
        <th>Cliente</th>
        <th>Vendedor</th>
        <th>Produtos</th>
        <th>Data</th>
        <th>Valor da Venda</th>
    </tr>
  </thead>
  <tbody>
    ' . $row . '
  </tbody>
    <tfoot style="padding-top: 17px">
    <tr>
      <td></td>
      <td colspan="4">Total de Registros</td>
      <td>' . $cont . '</td>
    </tr>
  </tfoot>
</table>';
    $relatorio = $relatorioDAO->gerarRelatorio($tabela, $css);
//} else {
//    $vendasDAO = new VendasDAO();
//    $venda = $vendasDAO->getVenda($_GET['id']);
//    $itensVenda = $vendasDAO->getItensVenda($_GET['id']);
//    $row = "";
//    $cont = 0;
//    foreach ($itensVenda as $itenVenda) {
//        $cont++;
//        $totalItem = $itenVenda->valor_unitario * $itenVenda->qtde_item;
//        $row .= "<tr>
//                  <td>{$itenVenda->nome_produto}</td>
//                  <td>{$itenVenda->qtde_item}</td>
//                  <td>{$itenVenda->valor_unitario}</td>
//                  <td>" . $totalItem . "</td>
//                  <td>{$itenVenda->tipo}</td>
//                 </tr>";
//    }
//    $css = file_get_contents('../../../style.css');
//    $tabela = "<div class='container-fluid'>
//<div class='col-4'>
//      <div>
//        <img src='../../../img/imgsTcc/logoTemp.png' alt='' />
//      </div>
//      <h1>Relatório da venda</h1>
//      <h2>Código: " . $venda->id . "</h2>
//    </div>
//        <div class='row'>
//            <div class='col-12'>
//                <form>
//                    <div class='form-row'>
//                        <div class='form-group col-2'>
//                            <label for='campoRazaoSocial'>Data da venda</label>
//                            <input type='text' class='form-control' value='" . dateUStoDateBR($venda->data) . "'>
//                        </div>
//                        <div class='form-group col-4'>
//                            <label for='campoRazaoSocial'>Vendedor</label>
//                            <input type='text' class='form-control' id='campoRazaoSocial'
//                                   placeholder='' value='{$venda->nome}'>
//                        </div>
//                    </div>
//                    <div class='form-row mb-3'>
//                        <!--Nome Fantasia-->
//                        <div class='form-group col-4'>
//                            <label for='campoNomeCliente'>Cliente</label>
//                            <input type='text' class='form-control' value='{$venda->nomeC}'>
//                        </div>
//                        <div class='form-group col-3 '>
//                            <label for='campoCnpj'>CPF Cliente</label>
//                            <input type='text' class='form-control' value='{$venda->cpfC}'>
//                        </div>
//                    </div>
//                    
//                    <table class='table'>
//                        <thead>
//                            <tr>
//                               <th>Produto</th>
//                               <th>Qtde</th>
//                                <th>Vl. Unit</th>
//                                <th>Vl. Total</th>
//                               <th>Tipo</th>
//                            </tr>
//                        </thead>
//                        <tbody>
//                        " . $row . "
//                        </tbody>
//                        <tfoot style='padding-top: 17px'>
//                        <tr>
//                            <td></td>
//                            <td colspan='3'>Total de Registros</td>
//                            <td>" . $cont . "</td>
//                        </tr>
//                        </tfoot>
//                    </table>
//                    <div class='form-row'>
//                        <!--Função do Representante-->
//                        <div class='form-group col-2'>
//                            <label for='campoTotalVenda'>Total</label>
//                            <input type='text' class='form-control' value='{$venda->total}'>
//                        </div>
//                        <div class='form-group col-2'>
//                            <label for='campoEmailRepresentante'>Forma de Pagamento</label>
//                            <input type='text' class='form-control' value='{$venda->forma_pg}'>
//                        </div>
//                    </div>
//                </form>
//            </div>
//        </div>
//    </div>";
//    $relatorio = $relatorioDAO->gerarRelatorio($tabela, $css);
}