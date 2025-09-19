<?php
class Cuidado {
    private $id;
    private $plantaId;
    private $tipo;
    private $descricao;
    private $data;
    private $lembrete;

    public function __construct($id = null, $plantaId = null, $tipo = null, $descricao = null, $data = null, $lembrete = null) {
        $this->id = $id;
        $this->plantaId = $plantaId;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->data = $data;
        $this->lembrete = $lembrete;
    }

    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getPlantaId() { return $this->plantaId; }
    public function setPlantaId($plantaId) { $this->plantaId = $plantaId; }

    public function getTipo() { return $this->tipo; }
    public function setTipo($tipo) { $this->tipo = $tipo; }

    public function getDescricao() { return $this->descricao; }
    public function setDescricao($descricao) { $this->descricao = $descricao; }

    public function getData() { return $this->data; }
    public function setData($data) { $this->data = $data; }

    public function getLembrete() { return $this->lembrete; }
    public function setLembrete($lembrete) { $this->lembrete = $lembrete; }
}
?>