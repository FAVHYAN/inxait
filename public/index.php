<?php

// definir rutas relativas a la raiz
chdir(dirname(__DIR__));

define("CORE_PATH", "core/");
define("APP_PATH", "app/");
define("SRC_PATH", "src/");

require_once CORE_PATH."Autoloader.php";

$app = new App();
