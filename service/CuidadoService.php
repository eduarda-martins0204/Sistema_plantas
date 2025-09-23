<?php
namespace service;

use dao\mysql\CuidadoDAO;

class CuidadoService extends CuidadoDAO {

    public function listar(){
        return parent::listar();
    }
    
    public function inserir($usuario_id, $planta_id, $tipo_cuidado){
        return parent::inserir($usuario_id, $planta_id, $tipo_cuidado);
    }

    public function alterar($id, $usuario_id, $planta_id, $tipo_cuidado){
        return parent::alterar($id, $usuario_id, $planta_id, $tipo_cuidado);
    }
    
    public function excluir($id){
        return parent::excluir($id);
    }
}
