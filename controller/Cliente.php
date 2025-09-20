<?php  

namespace Controller;

use service\ClienteService;
use template\ClienteTemp;
use template\ITemplate;


Class Cliente
{
    private ITemplate $template;
    public function __construct()
    {
        $this->template = new ClienteTemp();
    }

    public function listar()
    {
        $service = new ClienteService();
        $resultado = $service->listarCliente();
        $this->template->layout("\\public\\cliente\\listar.php", $resultado)
    }

    public function inserir(){

        $nome = $post["nome"];
        $email = $post["email"];
        $service = new ClienteService();
        $resultado = $service->inseri($nome, $email);
        header("location: /mvc20251/cliente/lista?info=1");
    }

    public function formulario()
    {
        $this->template->layout("\\public\\cliente\\form.php");
    }
    
}
?>