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
        
        // Esta linha foi alterada para remover barras extras do caminho
        require_once("public/" . ltrim($caminho, '\\'));
    }
}
