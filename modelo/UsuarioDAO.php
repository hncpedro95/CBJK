<?php

require_once 'conexao/Conexao.php';
require_once 'Usuario.php';

class UsuarioDAO {

    public $pdo = null;

    function __construct() {
        $this->pdo = Conexao::getConexao();
    }
    
    public function getUsuario($idUsuario){
        try {
            $sql="SELECT "
                . "`id_usuario`, `nome`, `login`, `senha`, `id_perfil`, `dt_cadastro`, `foto`"
                . "FROM `usuario` "
                . "WHERE id_usuario=:idUsuario";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue("idUsuario", $idUsuario);
            $stm->execute();
            $usuario=$stm->fetch(PDO::FETCH_OBJ);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
            
    }
    
    public function listarTodos(){
        try {
            $sql="SELECT "
                . "u.`id_usuario`, u.`nome`,  u.`login`,  u.`senha`,  u.`dt_cadastro`, "
                . "p.`nome` AS perfil "
                . "FROM `usuario` AS u "
                . "INNER JOIN perfil AS p ON (u.id_perfil=p.id_perfil) \n";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $usuarios=$stm->fetchAll(PDO::FETCH_OBJ);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
            
    }

    public function cadastrar(Usuario $usuario) {
        try {
            $sql = "INSERT INTO `usuario`(`nome`, `login`, `senha`, `id_perfil`, `dt_cadastro`, `foto`) "
                    . "VALUES (:nome,:login,:senha,:id_perfil,:dt_cadastro, :foto)";
            print_r($sql);
            print_r($usuario);
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue("nome", $usuario->getNome());
            $stm->bindValue("login", $usuario->getLogin());
            $stm->bindValue("senha", $usuario->getSenha());
            $stm->bindValue("id_perfil", $usuario->getIdPerfil());
            $stm->bindValue("dt_cadastro", $usuario->getDataCadastro());
            $stm->bindValue("foto", $usuario->getFoto());
            return $stm->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
//    public function editar(Usuario $usuario){
//        try {
//            $sql = "UPDATE `usuario` SET "
//                    . "`nome`=:nome,`login`=:login, "
//                    . "`senha`=:senha,`id_perfil`=:id_perfil ";
//            if (empty(",foto=:foto ")) {
////                    ." ,foto=:foto "
//            "WHERE `id_usuario`=:idUsuario";}
//            $stm = $this->pdo->prepare($sql);
//            $stm->bindValue("nome", $usuario->getNome());
//            $stm->bindValue("login", $usuario->getLogin());
//            $stm->bindValue("senha", $usuario->getSenha());
//            $stm->bindValue("id_perfil", $usuario->getIdPerfil());
//            $stm->bindValue("idUsuario", $usuario->getIdUsuario());
//            if($stm->bindValue("foto", $usuario->getFoto())){
//            }
//            return $stm->execute();
//        } catch (PDOException $exc);{
//        echo $exc->getMessage();
//        
//        
//    }}
    
    public function excluir($idUsuario){
        try {
            $stm = $this->pdo->prepare("DELETE FROM `usuario` WHERE `id_usuario`=:idUsuario");
            $stm->bindValue("idUsuario", $idUsuario);
            return $stm->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function qtdClientesCadastradados ($id_usuario){
        try{
        $sql="SELECT count(*) FROM `cliente` WHERE `id_usuario` = :id_usuario";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue ("id_usuario", $id_usuario);
        $stm->execute();
        return $stm->fetchColumn();
      } catch (PDOException $exc) {
          echo $exc->getMessage();
      }
    
   
    }
     public function verificaLogin($login) {
        
        try {
            $stm = $this->pdo->prepare("SELECT count(*) FROM `usuario` WHERE login =:login");
            $stm->bindValue("login", $login);
            $stm->execute();
            return $stm->fetchColumn();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}