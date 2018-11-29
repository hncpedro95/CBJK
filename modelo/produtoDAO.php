<?php

require_once 'conexao/Conexao.php';
require_once 'produto.php';

class produtoDAO {

    public $pdo = null;

     function __construct() {
        $this->pdo = Conexao::getConexao();
    }

    /**
     * Retorna todos os clientes existentes no banco de dados
     */
    public function listarTodos() {
         try {
            $sql="SELECT * FROM `produto` ";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $produtos=$stm->fetchAll(PDO::FETCH_OBJ);
            return $produtos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    /**
     * Cadastra o objeto cliente no banco de dados
     * @param produto $produto
     */
    public function cadastrar(produto $produto) {
    
    try {
        //var_dump($cliente);
        $sql = "INSERT INTO `produto`(`nome`, `quantidade`, `preco` ) "
                    . "VALUES (:nome, :quantidade,:preco )";
        //echo $sql;       
        //exit();
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue("nome", $produto->getNome());
            $stm->bindValue("quantidade", $produto->getQuantidade());
            $stm->bindValue("preco", $produto->getPreco());
         return $stm->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    /**
     * Exclui o produto a partir do id
     * @param type $idcliente
     */
    public function excluir($idProduto) {
         try {
            $stm = $this->pdo->prepare("DELETE FROM `produto` WHERE `id`=:idProduto");
            $stm->bindValue("idProduto", $idProduto);
            return $stm->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    /**
     * Retorna o cliente com id correspondente do parâmetro
     * @param type $idclient
     */
    public function getProduto($idProduto) {
         try {
            $sql="SELECT "
                . "`id`, `nome`, `fabricante`, `quantidade`, `preco`, `foto`"
                . "FROM `produto` "
                . "WHERE id=:idProduto";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue("idProduto", $idProduto);
            $stm->execute();
            $produto=$stm->fetch(PDO::FETCH_OBJ);
            return $produto;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    /**
     * Altera as informações do cliente na base de dados 
     * (Obs.: o cliente deve vim com ID para saber qual cliente atualizar)
     * @param Cliente $cliente
     */
    public function editar(produto $produto) {
         try {
            $sql = "UPDATE `produto` SET "
                    . "`nome`=:nomeProduto,`fabricante`=:fabricante, "
                    . "`quantidade`=:quantidade,`preco`=:preco "
                    . "WHERE `id`=:idProduto";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue("nomeProduto", $produto->getNomeProduto());
            $stm->bindValue("fabricante", $produto->getFabricante());
            $stm->bindValue("quantidade", $produto->getQuantidade());
            $stm->bindValue("preco", $produto->getPreco());
            $stm->bindValue("idProduto", $produto->getIdProduto());
            return $stm->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
