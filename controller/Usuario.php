<?php
namespace Controller;

use service\UsuarioService;
use template\UsuarioTemp;
use template\ITemplate;

Class Usuario{
    private ITemplate $template;
    public function __construct(){
        $this->template = new UsuarioTemp();
    }

    public function listar(){
        $service = new UsuarioService();
        $resultado = $service->listar();
        $this->template->layout("teste.php", $resultado);
    }

    public function inserir(){
        $nome = $post["nome"];
        $email = $post["email"];
        $service = new UsuarioService();
        $resultado = $service->inseri($nome, $email);
        header("location: /mvc20251/usuario/lista?info=1");
        //alterar a rota conforme a pasta
    }

    public function formulario(){
        $this->template->layout("\\public\\usuario\\form.php");
    }

    public function alterarForm(){
        $id = $_GET["id"];
        $service = new UsuarioService();
        $resultado = $service->buscarUsuario($id);

        $this->template->layout("\\public\\usuario\\formAlterar.php", $resultado);
    }
}

?>



