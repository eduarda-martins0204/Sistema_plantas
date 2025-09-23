<?php
namespace dao;

interface IPlantaDAO {
    public function listar();
    public function inserir($nome_cientifico, $nome_popular);
    public function alterar($id, $nome_cientifico, $nome_popular);
    public function excluir($id);
}
