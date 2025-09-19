<?php
namespace generic;

class Controller{
    private $arrChamadas =[];
    public function __construct(){

        $this->arrChamadas = [
            ''=> new Acao('Home', 'index'),
            "planta/listar"=> new Acao('Planta', 'listar'),
            "planta/cadastrar"=> new Acao('Planta', 'cadastrar'),
            "planta/editar"=> new Acao('Planta', 'editar'),
            "planta/excluir"=> new Acao('Planta', 'excluir'),
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