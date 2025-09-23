<?php
namespace service;

use dao\mysql\UsuarioDAO;

class UsuarioService extends UsuarioDAO {

    public function listar(){
        return parent::listar();
    }
    
    public function inserir($nome, $email){
        return parent::inserir($nome, $email);
    }

    public function alterar($id, $nome, $email){
        return parent::alterar($id, $nome, $email);
    }

    public function excluir($id){
        return parent::excluir($id);
    }
}
