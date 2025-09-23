<?php
namespace dao;

interface ICuidadoDAO {
    public function listar();
    public function listarId($id);
    public function inserir($usuario_id, $planta_id, $tipo_cuidado);
    public function alterar($id, $usuario_id, $planta_id, $tipo_cuidado);
    public function excluir($id);
}


