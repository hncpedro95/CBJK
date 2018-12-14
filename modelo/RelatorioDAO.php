<?php
class RelatorioDAO
{
    public $pdo = null;
    function __construct() {
        $this->pdo = Conexao::getConexao();
    }
    public function listarDadoCliente($id){
        try {
            $sql="SELECT * FROM `cbjk`.`cliente` TBC INNER JOIN `bd-sgea`.`TB_ENDERECO` TBE ON TBC.id_endereco = TBE.id_endereco
                    INNER JOIN `bd-sgea`.`TB_UF` TBU ON TBU.`id_uf` = TBE.`id_uf` INNER JOIN `bd-sgea`.`TB_SITUACAO` TBS ON TBS.`id_situacao` = TBC.`id_situacao` WHERE id_cliente = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue(1, $id);
            $stm->execute();
            $cliente = $stm->fetchAll(PDO::FETCH_OBJ);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function listarTodos(){
        try {
            $sql="SELECT * FROM `bd-sgea`.`TB_CLIENTE` TBC INNER JOIN `bd-sgea`.`TB_ENDERECO` TBE ON TBC.id_endereco = TBE.id_endereco
                    INNER JOIN `bd-sgea`.`TB_UF` TBU ON TBU.`id_uf` = TBE.`id_uf` INNER JOIN `bd-sgea`.`TB_SITUACAO` TBS ON TBS.`id_situacao` = TBC.`id_situacao` ";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $clientes = $stm->fetchAll(PDO::FETCH_OBJ);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function gerarRelatorio($html2, $css)
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($css, 1);
        $mpdf->WriteHTML($html2, 2);
        $mpdf->Output("", "I");
    }
}