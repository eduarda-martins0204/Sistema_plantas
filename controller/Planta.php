<?php
namespace controller;

use dao\mysql\PlantaDAO;

class Planta {
    public function listar() {
        $dao = new Planta();
        $plantas = $dao->getAll();
        
        // Aqui você chamaria a view
        include "view/plantas/listar.php";
    }

    public function cadastrar() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $dao = new Planta();
            $dao->insert($_POST["nome"], $_POST["especie"]);
            header("Location: index.php?classe=Planta&metodo=listar");
        } else {
            include "view/plantas/cadastrar.php";
        }
    }

    public function editar() {
        $dao = new Planta();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $dao->update($_POST["id"], $_POST["nome"], $_POST["especie"]);
            header("Location: index.php?classe=Planta&metodo=listar");
        } else {
            $planta = $dao->getById($_GET["id"]);
            include "view/plantas/editar.php";
        }
    }

    public function excluir() {
        $dao = new Planta();
        $dao->delete($_GET["id"]);
        header("Location: index.php?classe=Planta&metodo=listar");
    }
}