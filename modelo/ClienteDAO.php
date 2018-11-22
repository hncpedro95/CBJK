<?php

require_once 'conexao/Conexao.php';
require_once 'Cliente.php';

class ClienteDAO {

    public $pdo = null;

     function __construct() {
        $this->pdo = Conexao::getConexao();
    }

    /**
     * Retorna todos os clientes existentes no banco de dados
     */
    public function listarTodos() {
         try {
            $sql="SELECT * FROM `cliente` ";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $clientes=$stm->fetchAll(PDO::FETCH_OBJ);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    /**
     * Cadastra o objeto cliente no banco de dados
     * @param Cliente $cliente
     */
    public function cadastrar(Cliente $cliente) {
    
    try {
        var_dump($cliente);
        $sql = "INSERT INTO `cliente`(`nome`, `cpf`, `endereco`, `numero`, `complemento`, `estado`, `cidade`,"
                . "`telefone`, `celular`, `whatsapp`, `id_usuario`) "
                    . "VALUES (:nome,:cpf, :endereco, :numero, :complemento, :estado, :cidade, :telefone,"
                . ":celular, :whatsapp, :id_usuario)";
        echo $sql;       
//        exit();
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue("nome", $cliente->getNome());
            $stm->bindValue("cpf", $cliente->getCpf());
            $stm->bindValue("endereco", $cliente->getEndereco());
            $stm->bindValue("numero", $cliente->getNumero());
            $stm->bindValue("complemento", $cliente->getComplemento());
            $stm->bindValue("estado", $cliente->getEstado());
            $stm->bindValue("cidade", $cliente->getCidade());
            $stm->bindValue("telefone", $cliente->getTelefone());
            $stm->bindValue("celular", $cliente->getCelular());
            $stm->bindValue("celular", $cliente->getCelular());
            $stm->bindValue("whatsapp", $cliente->getWhatsapp());
            $stm->bindValue("id_usuario", $cliente->getId_usuario());
            return $stm->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    /**
     * Exclui o cliente a partir do id
     * @param type $idcliente
     */
    public function excluir($idcliente) {
         try {
            $stm = $this->pdo->prepare("DELETE FROM `cliente` WHERE `id_cliente`=:idCliente");
            $stm->bindValue("idCliente", $idcliente);
            return $stm->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    /**
     * Retorna o cliente com id correspondente do parâmetro
     * @param type $idclient
     */
    public function getCliente($idCliente) {
         try {
            $sql="SELECT "
                . "`id_cliente`, `nome`, `cpf`, `endereco`, `numero`, `complemento`,`estado`, `cidade`, `telefone`, `celular`, `whatsapp` "
                . "FROM `cliente` "
                . "WHERE id_cliente=:idCliente";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue("idCliente", $idCliente);
            $stm->execute();
            $cliente=$stm->fetch(PDO::FETCH_OBJ);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    /**
     * Altera as informações do cliente na base de dados 
     * (Obs.: o cliente deve vim com ID para saber qual cliente atualizar)
     * @param Cliente $cliente
     */
    public function alterar(Cliente $cliente) {
         try {
            $sql = "UPDATE `cliente` SET "
                    . "`nome`=:nome,`cpf`=:cpf, "
                    . "`endereco`=:endereco "
                    . "`numero`=:numero, `complemento`=:complemento "
                    . "`estado`=:estado, `cidade`=:cidade "
                    . "`telefone`=:telefone, `celular`=:celular, `whatsapp`=:whatsapp "
                    . "WHERE `id_cliente`=:idCliente";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue("nome", $cliente->getNome());
            $stm->bindValue("cpf", $cliente->getCpf());
            $stm->bindValue("endereco", $cliente->getEndereco());
            $stm->bindValue("numero", $cliente->getNumero());
            $stm->bindValue("complemento", $cliente->getComplemento());
            $stm->bindValue("estado", $cliente->getEstado());
            $stm->bindValue("cidade", $cliente->getCidade());
            $stm->bindValue("telefone", $cliente->getTelefone());
            $stm->bindValue("celular", $cliente->getCelular());
            $stm->bindValue("whatsapp", $cliente->getWhatsapp());
            $stm->bindValue("idCliente", $cliente->getIdCliente());
            return $stm->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
