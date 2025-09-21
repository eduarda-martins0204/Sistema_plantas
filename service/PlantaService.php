<?php  
namespace service;

use dao\mysql\PlantaDAO;

Class PlantaService extends PlantaDAO{

    public function listar(){
        return parent::listar();
    }

    public function inserir($id,$nome_cientifico,$nome_popular){
        return parent::inserir($id,$nome_cientifico,$nome_popular);
    }

    public function alterar($id,$nome_cientifico,$nome_popular){
        return parent::alterar($id,$nome_cientifico,$nome_popular);
    }

    public function listarID($id){
        return parent::listarID($id);
    }
}