<?php
namespace Controller;

use service\CuidadoService;
use template\CuidadoTemp;
use template\ITemplate;
use generic\Acao;

class Cuidado extends Acao {
    private $service;
    
    public function __construct() {
        $this->service = new CuidadoService();
    }
    
    public function listar() {
        $retorno = $this->service->listar();
        
        $this->template->layout("public/cuidado/listar.php", $retorno);
    }
    
    public function inserir() {
        $usuario_id = $_POST["usuario_id"];
        $planta_id = $_POST["planta_id"];
        $tipo_cuidado = $_POST["tipo_cuidado"];
        $this->service->inserir($usuario_id, $planta_id, $tipo_cuidado);
        
        header("location: /sistemaplantas/index.php?param=cuidado/listar");
    }
    
    public function formulario() {
        $this->template->layout("public/cuidado/form.php");
    }
    
    public function alterarForm() {
        $id = $_GET["id"];
        $retorno = $this->service->buscarCuidado($id);

        $this->template->layout("public/cuidado/formAlterar.php", $retorno);
    }
}
