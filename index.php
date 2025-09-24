<?php
include  "generic/Autoload.php";

var_dump($_GET['param']);
exit;

use generic\Controller;

if (isset($_GET["param"])){
    $controller = new Controller();
    $controller->verificarChamadas($_GET["param"]);
}

use generic\Controller;

if (isset($_GET["param"])) {
    $controller = new Controller();
    $controller->verificarChamadas($_GET["param"]);
}

