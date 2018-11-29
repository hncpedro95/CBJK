/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  User
 * Created: 29/11/2018
 */
-- INSERINDO COLUNA DE "BAIRRO" NA TABELA CLIENTE 29/11
ALTER TABLE `cliente` ADD `bairro` VARCHAR(50) NOT NULL AFTER `complemento`;

--ALTERANDO ANULAÇÕES DAS COLUNAS NO CLIENTE 29/11
ALTER TABLE `cliente` CHANGE `celular` `celular` CHAR(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `cliente` CHANGE `telefone` `telefone` CHAR(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;