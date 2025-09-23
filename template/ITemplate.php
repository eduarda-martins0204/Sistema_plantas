<?php
namespace template;

interface ITemplate{
    public function cabecalho();
    public function rodape();
    public function layout($caminho,$parametro = null);
}

class CuidadoTemp implements ITemplate {
    public function cabecalho() {
        // Implementação específica para CuidadoTemp
    }

    public function rodape() {
        // Implementação específica para CuidadoTemp
    }

    public function layout($caminho, $parametro = null) {
        // Implementação específica para CuidadoTemp
    }
}

class UsuarioTemp implements ITemplate {
    public function cabecalho() {
        // Implementação específica para ClienteTemp
    }

    public function rodape() {
        // Implementação específica para ClienteTemp
    }

    public function layout($caminho, $parametro = null) {
        // Implementação específica para ClienteTemp
    }
}

class PlantaTemp implements ITemplate {
    public function cabecalho() {
        // Implementação específica para PlantaTemp
    }

    public function rodape() {
        // Implementação específica para PlantaTemp
    }

    public function layout($caminho, $parametro = null) {
        // Implementação específica para PlantaTemp
    }
}

