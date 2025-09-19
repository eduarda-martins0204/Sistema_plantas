<?php
require_once 'dao/IPlantaDAO.php';
require_once 'controller/Planta.php';

class PlantaDAO implements IPlantaDAO {
    public function salvar(Planta $planta) {
        // Implementar lógica para inserir uma planta no banco
    }
    public function buscarPorId($id) {
        // Implementar lógica para buscar uma planta pelo id
    }
    public function buscarTodos() {
        // Implementar lógica para buscar todas as plantas
    }
    public function atualizar(Planta $planta) {
        // Implementar lógica para atualizar uma planta
    }
    public function remover($id) {
        // Implementar lógica para remover uma planta
    }
}
?>