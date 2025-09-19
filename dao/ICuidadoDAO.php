<?php
interface ICuidadoDAO {
    public function salvar(Cuidado $cuidado);
    public function buscarPorId($id);
    public function buscarTodos();
    public function atualizar(Cuidado $cuidado);
    public function remover($id);
}
?>