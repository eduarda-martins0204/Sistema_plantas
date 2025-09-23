<?php
namespace template;

require_once 'ITemplate.php';

class UsuarioTemp implements ITemplate {

    public function cabecalho() {
        echo "<header><h1>Perfil do Usuário</h1></header>";
    }

    public function rodape() {
        echo "<footer><p>Gestão de Usuários - Sistema X</p></footer>";
    }

    public function layout($caminho, $parametro = null) {
        $this->cabecalho();
        echo "<main>";
        if ($parametro && isset($parametro['nome'])) {
            echo "<h2>Bem-vindo, " . htmlspecialchars($parametro['nome']) . "!</h2>";
            echo "<p>E-mail: " . htmlspecialchars($parametro['email']) . "</p>";
            echo "<p>ID do Usuário: " . htmlspecialchars($parametro['id']) . "</p>";
        } else {
            echo "<p>Dados do usuário não foram encontrados.</p>";
        }
        echo "</main>";
        $this->rodape();
    }
}
