<?php
namespace template;

require_once 'ITemplate.php';

class CuidadoTemp implements ITemplate {

    public function cabecalho() {
        echo "<header><h1>Detalhes do Cuidado</h1></header>";
    }

    public function rodape() {
        echo "<footer><p>&copy; Cuidado de Plantas</p></footer>";
    }

    public function layout($caminho, $parametro = null) {
        $this->cabecalho();
        echo "<main>";
        if ($parametro && isset($parametro['cuidado'])) {
            echo "<h2>Cuidado: " . htmlspecialchars($parametro['cuidado']) . "</h2>";
            echo "<p>Detalhes completos sobre como cuidar da sua planta.</p>";
        } else {
            echo "<p>Conteúdo não encontrado.</p>";
        }
        echo "</main>";
        $this->rodape();
    }
}
