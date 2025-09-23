<?php
namespace Controller;

use service\UsuarioService;
use template\UsuarioTemp;
use template\ITemplate;

class Usuario {
    private ITemplate $template;
    
    public function __construct() {
        $this->template = new UsuarioTemp();
    }
    
    public function listar() {
        $service = new UsuarioService();
        $resultado = $service->listar();
        
        $this->template->layout("public/usuario/listar.php", $resultado);
    }
    
    public function inserir() {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $service = new UsuarioService();
        $resultado = $service->inserir($nome, $email);

        header("location: /mvc20251/usuario/lista?info=1");
    }
    
    public function formulario() {
        $this->template->layout("public/usuario/form.php");
    }
    
    public function alterarForm() {
        $id = $_GET["id"];
        $service = new UsuarioService();
        $resultado = $service->buscarUsuario($id);

        $this->template->layout("public/usuario/formAlterar.php", $resultado);
    }
}
