<?php
error_reporting(0);
// definir rutas relativas a la raiz
chdir(dirname(__DIR__));

$url=explode("/", $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

define("CORE_PATH", "core/");
define("URL_PATH", $url[0].'/'.$url[1].'/'.$url[2]);
define("APP_PATH", "app/");
define("SRC_PATH", "src/");


require_once CORE_PATH."Autoloader.php";

$app = new App();
