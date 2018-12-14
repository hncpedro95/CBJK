<?php
class VendaDAO
{
        public $pdo = null;
    
        public function __construct() {
            $this->pdo = Conexao::getConexao();
        }
        
        public function registrarVenda(Venda $venda){
            try {
                $sql = "INSERT INTO `cbjk`.`venda`(`data`, `valor_total`, `id_cliente`, `id_usuario`, `numero_pedido`)
                        VALUES(now(), :valor_total, :id_cliente, :id_usuario, :numero_pedido);";
                $stm = $this->pdo->prepare($sql);
                $stm->bindValue("valor_total", $venda->getValor_total());
                $stm->bindValue("id_cliente", $venda->getIdCliente());
                $stm->bindValue("id_usuario", $venda->getId_usuario());
                $stm->bindValue("numero_pedido", $venda->getNumero_pedido());
                $gerarVenda = $stm->execute();
                $_SESSION['ultimoIdvenda'] = $this->pdo->lastInsertId();
                return $gerarVenda;
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        }
        
        public function inserirItensVenda(ItensVenda $itensVenda){
        try {
            $sql = "INSERT INTO `cbjk`.`itens_venda`(`id_produto`, `id_venda`, `quantidade`)
                    VALUES(:id_produto, :id_venda, :quantidade)";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue("id_produto", $itensVenda->getId_produto());
            $stm->bindValue("id_venda", $itensVenda->getId_venda());
            $stm->bindValue("quantidade", $itensVenda->getQuantidade());
            $resultado = $stm->execute();
            if($resultado){
                return $this->baixaEstoque($itensVenda->getId_produto(), $itensVenda->getQuantidade());
            }
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function baixaEstoque($idProduto, $qtde){
        try {
            $sql = "UPDATE `cbjk`.`produto` SET `quantidade` = (`quantidade` - ?) WHERE `id_produto` = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue(1, $qtde);
            $stm->bindValue(2, $idProduto);
            return $stm->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
        
    public function listarVendas(){
        try {
            $sql = "SELECT TVENDA.*, TCLI.*, TCO.* FROM `bd-sgea`.TB_VENDAS TVENDA 
            INNER JOIN `bd-sgea`.TB_CLIENTE TCLI ON TVENDA.id_cliente = TCLI.id_cliente 
            INNER JOIN `bd-sgea`.TB_COLABORADOR TCO ON TVENDA.id_Colaborador = TCO.id_Colaborador;";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $vendas = $stm->fetchAll(PDO::FETCH_OBJ);
            return $vendas;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function getProximoNumeroVenda(){
         try {
            $sql="SELECT MAX(`id_venda`) FROM `venda`";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $numVenda=$stm->fetchColumn();
            
            $resultado  = str_pad($numVenda + 1, 4, '0', STR_PAD_LEFT);
            $resultado = date('Y'). $resultado;
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
        
    }