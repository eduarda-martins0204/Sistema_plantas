<?php  

namespace Controller;

use service\CuidadoService;
use template\CuidadoTemp;
use template\ITemplate;

Class Cuidado{
    private ITemplate $template;
    public function __construct(){
        $this->template = new CuidadoTemp();
    }

    public function listar(){
        $service = new CuidadoService();
        $resultado = $service->listarCuidado();
        $this->template->layout("\\public\\cuidado\\listar.php", $resultado);
    }

    public function inserir() {
    $usuario_id   = $_POST["usuario_id"];
    $planta_id    = $_POST["planta_id"];
    $tipo_cuidado = $_POST["tipo_cuidado"];
    $service = new CuidadoService();
    $resultado = $service->inserir($usuario_id, $planta_id, $tipo_cuidado);

    header("location: /mvc20251/cuidado/lista?info=1");
    }

    public function formulario(){
        $this->template->layout("\\public\\cuidado\\form.php");
    }
    
    public function alterarForm(){
        $id = $_GET["id"];
        $service = new CuidadoService();
        $resultado = $service->buscarCuidado($id);

        $this->template->layout("\\public\\cuidado\\formAlterar.php", $resultado);
    }
}
?>
