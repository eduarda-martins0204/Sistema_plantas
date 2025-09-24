<?php
namespace generic;

class Controller{
    private $arrChamadas = [];
    public function __construct(){

        $this->arrChamadas = [
            '' => new Acao('Home', 'index'),
            "planta/listar" => new Acao('Planta', 'listar'),
            "planta/inserir" => new Acao('Planta', 'inserir'),
            "planta/formulario" => new Acao('Planta', 'formulario'),
            "planta/formularioalterar => new Acao('Planta', 'formularioalterar'),
            "planta/excluir" => new Acao('Planta', 'excluir'),

            "cuidado/listar" => new Acao('Cuidado', 'listar'),
            "cuidado/inserir" => new Acao('Cuidado', 'inserir'),
            "cuidado/formulario" => new Acao('Cuidado', 'formulario'),
            "cuidado/formularioalterar => new Acao('Cuidado', 'formularioalterar'),
            "cuidado/excluir" => new Acao('Cuidado', 'excluir'),
            
            "usuario/listar" => new Acao('Usuario', 'listar')
            "usuario/alterar" => new Acao('Usuario', 'alterar')
            "usuario/inserir" => new Acao('Usuario', 'inserir'),
            "usuario/formulario" => new Acao('Usuario', 'formulario'),
            "usuario/formularioalterar" => new Acao('Usuario', 'formularioalterar'),
            "usuario/excluir" => new Acao('Usuario', 'excluir'),
        ];
    }

    public function verificarChamadas($rota){
        if(isset($this->arrChamadas[$rota])){
            $acao = $this->arrChamadas[$rota];
            $acao->executar();
            return;
        }
        echo "Rota nâo existe!";
    }
}

