<?php
namespace dao\mysql;

use dao\ICuidadoDAO;
use generic\MysqlFactory;

class CuidadoDAO extends MysqlFactory implements ICuidadoDAO {

    public function listar(){
        $sql = "select id, usuario_id, planta_id, tipo_cuidado from cuidados";
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }
    
    public function inserir($usuario_id, $planta_id, $tipo_cuidado){
        $sql = "insert into cuidados (usuario_id, planta_id, tipo_cuidado) values (:usuario_id, :planta_id, :tipo_cuidado)";
        $param = [
            ":usuario_id" => $usuario_id,
            ":planta_id" => $planta_id,
            ":tipo_cuidado" => $tipo_cuidado
        ];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    public function alterar($id, $usuario_id, $planta_id, $tipo_cuidado){
        $sql = "update cuidados set usuario_id = :usuario_id, planta_id = :planta_id, tipo_cuidado = :tipo_cuidado where id = :id";
        $param = [
            ":id" => $id,
            ":usuario_id" => $usuario_id,
            ":planta_id" => $planta_id,
            ":tipo_cuidado" => $tipo_cuidado
        ];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    public function excluir($id){
        $sql = "delete from cuidados where id = :id";
        $param = [
            ":id" => $id
        ];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
}
