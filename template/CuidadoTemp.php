<?php
namespace template;

use template\ITemplate;

class CuidadoTemp implements ITemplate {
    public function cabecalho() {
    }

    public function rodape() {
    }

    public function layout($caminho, $parametro = null) {
        if ($parametro) {
            extract(['resultado' => $parametro]);
        }
        
        require_once($caminho);
    }
}
