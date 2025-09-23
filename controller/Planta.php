<?php
namespace Controller;

use service\PlantaService;
use template\PlantaTemp;
use template\ITemplate;
use generic\Acao;

class Planta extends Acao {
    private $service;

    public function __construct() {
        $this->service = new PlantaService();
    }

    public function listar() {
        $retorno = $this->service->listar();
        
        $this->template->layout("public/planta/listar.php", $retorno);
    }

    public function inserir() {
        $nome_cientifico = $_POST["nome_cientifico"];
        $nome_popular = $_POST["nome_popular"];
        $this->service->inserir($nome_cientifico, $nome_popular);
        
        header("location: /sistemaplantas/index.php?param=planta/listar");
    }

    public function formulario() {
        $this->template->layout("public/planta/form.php");
    }

    public function alterarForm() {
        $id = $_GET["id"];
        $retorno = $this->service->buscarPlanta($id);
        
        $this->template->layout("public/planta/formAlterar.php", $retorno);
    }
}
