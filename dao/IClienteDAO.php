<?php
interface IClienteDAO {
    public function salvar(Cliente $cliente);
    public function buscarPorId($id);
    public function buscarTodos();
    public function atualizar(Cliente $cliente);
    public function remover($id);
}
?>