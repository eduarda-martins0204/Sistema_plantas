<?php
interface IPlantaDAO {
    public function salvar(Planta $planta);
    public function buscarPorId($id);
    public function buscarTodos();
    public function atualizar(Planta $planta);
    public function remover($id);
}
?>