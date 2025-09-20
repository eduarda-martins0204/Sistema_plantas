<?php
namespace service;

use dao\mysql\ClienteDAO;

Class ClienteService extends ClienteDAO{
    public function listarClientes(){

        return parent::listar();
    }

    public function inserir($nome,$endereco){
        
        return parent::inserir($nome,$endereco);
    }

    public function alterar($id,$nome,$endereco){
        
        return parent::alterar($id,$nome,$endereco);
    }

    public function listarID($id){
        
        return parent::listarID($id);
    }

}