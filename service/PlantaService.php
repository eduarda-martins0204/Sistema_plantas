<?php
namespace service;

use dao\mysql\PlantaDAO;

class PlantaService extends PlantaDAO {

    public function listar(){
        return parent::listar();
    }
    
    public function inserir($nome_cientifico, $nome_popular){
        return parent::inserir($nome_cientifico, $nome_popular);
    }

    public function alterar($id, $nome_cientifico, $nome_popular){
        return parent::alterar($id, $nome_cientifico, $nome_popular);
    }

    public function excluir($id){
        return parent::excluir($id);
    }
}
