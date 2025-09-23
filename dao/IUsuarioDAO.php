<?php
namespace dao;

interface IUsuarioDAO {
    public function listar();
    public function inserir($nome, $email);
    public function alterar($id, $nome, $email);
    public function excluir($id);
}
