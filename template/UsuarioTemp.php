<?php
namespace template;

use template\ITemplate;

class UsuarioTemp implements ITemplate {
    public function cabecalho() {
    }

    public function rodape() {
    }

    public function layout($caminho, $parametro = null) {
        if ($parametro) {
            extract(['resultado' => $parametro]);
        }
        
        require_once("public/" . $caminho);
    }
}
