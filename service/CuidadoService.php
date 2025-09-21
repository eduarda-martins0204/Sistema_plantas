<?php
namespace service;

use dao\mysql\CuidadoDao;

Class CuidadoService extends CuidadoDao {

    public function listar(){
        return parent::listar();
    }

    public function inserir($id,$cuidado){
        return parent::inserir($id,$cuidado);
    }

    public function alterar($id,$cuidado){
        return parent::alterar($id,$cuidado);
    }

    public function listarID($ID){
        return parent::listarID($ID);
    }

}