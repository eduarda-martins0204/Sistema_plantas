<?php
namespace service;

use dao\mysql\CuidadoDao;

Class CuidadoService extends CuidadoDao {

    public function listarCuidados(){
        return parent::listarCuidados();
    }

    public function inserirCuidado($id,$cuidado){
        return parent::inserirCuidado($id,$cuidado);
    }

    public function alterarCuidado($id,$cuidado){
        return parent::alterarCuidado($id,$cuidado);
    }

    public function listarID($ID){
        return parent::listarID($ID);
    }

}