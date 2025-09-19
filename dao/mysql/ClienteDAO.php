<?php
require_once 'dao/IClienteDAO.php';
require_once 'controller/Cliente.php';

class ClienteDAO implements IClienteDAO {
    // Aqui você implementa os métodos usando SQL para MySQL
    public function salvar(Cliente $cliente) {
        // Código para inserir no banco
    }
    public function buscarPorId($id) {
        // Código para buscar por id
    }
    public function buscarTodos() {
        // Código para buscar todos
    }
    public function atualizar(Cliente $cliente) {
        // Código para atualizar
    }
    public function remover($id) {
        // Código para remover
    }
}
?>