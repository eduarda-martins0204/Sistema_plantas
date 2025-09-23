<?php
namespace controller;

use service\PlantaService;
use template\PlantaTemp;
use template\ITemplate;

class Planta {
    private ITemplate $template;
    public function __construct(){
        $this->template = new PlantaTemp();
    }

    public function listar(){
        $service = new PlantaService();
        $resultado = $service->listar();
        $this->template->layout("\\public\\planta\\listar.php", $resultado);
    }

    public function inserir(){
        $nome_cientifico = $_POST["nome_cientifico"];
        $nome_popular = $_POST["nome_popular"];
        $service = new PlantaService();
        $resultado = $service->inseri($nome_cientifico, $nome_popular);
        header("location: /mvc20251/planta/lista?info=1");
        //alterar a rota conforme a pasta
    }

    public function formulario(){
        $this->template->layout("\\public\\planta\\form.php");
    }

    public function alterarForm(){
        $id = $_GET["id"];
        $service = new PlantaService();
        $resultado = $service->listarID($id);

        $this->template->layout("\\public\\planta\\formAlterar.php", $resultado);
    }
}
?>
