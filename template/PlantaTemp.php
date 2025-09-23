<?php
namespace template;

use template\ITemplate;

class PlantaTemp implements ITemplate {

    public function cabecalho() {
        echo "<header><h1>Detalhes da Planta</h1></header>";
    }

    public function rodape() {
        echo "<footer><p>Catálogo de Plantas</p></footer>";
    }

    public function layout($caminho, $parametro = null) {
        $this->cabecalho();
        echo "<main>";

        if (file_exists($caminho)) {
            // Se o caminho do arquivo de visualização existir, inclui ele
            // e extrai o array $parametro para variáveis locais
            if ($parametro && is_array($parametro)) {
                extract($parametro);
            }
            include $caminho;
        } else {
            // Caso contrário, mostra uma mensagem de erro
            echo "<h2>Arquivo de visualização não encontrado: " . htmlspecialchars($caminho) . "</h2>";
        }
        
        echo "</main>";
        $this->rodape();
    }
}
