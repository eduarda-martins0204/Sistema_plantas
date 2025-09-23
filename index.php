<?php

// Linhas para exibir todos os erros (ADICIONE ESTAS DUAS LINHAS)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include __DIR__ . "/generic/Autoload.php";

use generic\Controller;

if (isset($_GET["param"])){
    $controller = new Controller ();
    $controller->verificarChamadas($_GET["param"]);
}
