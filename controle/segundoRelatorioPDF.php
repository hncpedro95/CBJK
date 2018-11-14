<?php

include_once '../util/fpdf.php';
require_once '../modelo/UsuarioDAO.php';
      
$usuDao = new UsuarioDAO ();
$Usuarios =$usuDao->listarTodos();

$PDF_Prod = new FPDF;
session_start();
        $PDF_Prod ->AddPage("L");
$PDF_Prod ->SetFont('Arial', 'B', 17);
$PDF_Prod ->Cell(0, 10, 'Relatório de Produtividade do Usuário', 0, 1, "C");
$PDF_Prod->SetFont('Arial', 'B', 12);
$PDF_Prod->Cell(60, 6, "Nome do Usuário", 1, 0);
$PDF_Prod->Cell(30,6,"DT Cadastro",1,0);
$PDF_Prod->Cell(30,6,"Login",1,0);
$PDF_Prod->Cell(30,6,"Perfil",1,0);
$PDF_Prod->Cell(25,6,"Qt Client.",1,1);

foreach ($Usuarios as $usuario){
    $PDF_Prod->Cell(60, 6, $usuario->nome, 1, 0);
    $PDF_Prod->Cell(30,6,$usuario->dt_cadastro,1, 0);
    $PDF_Prod->Cell(30,6, $usuario->login,1,0);
    $PDF_Prod->Cell(30,6, $usuario->perfil,1,0);
    $PDF_Prod->Cell(25,6,$usuDao->qtdClientesCadastradados($usuario->id_usuario),1,1, "C");
}
$PDF_Prod ->Output(); 
