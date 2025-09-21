<?php
interface IUsuarioDAO {
    public function salvar(Usuario $usuario);
    public function buscarPorId($id);
    public function buscarTodos();
    public function atualizar(Usuario $usuario);
    public function remover($id);
}
?>