<?php
use Classes\Router;
use Admin\Router as AdminRouter;

$indexDir = '';
if (stristr($_SERVER["REQUEST_URI"], 'admine')) {
    $router = new AdminRouter();
    $indexDir = 'admin/';
} else {
    $router = new Router();
}
$templateDir = $indexDir.'templates/';
$compileDir = $indexDir.'templates/templates_c';
$dbConnectionFile = $indexDir.'connection.php';

require_once($dbConnectionFile);

$smarty = new Smarty();
$smarty->template_dir = $templateDir;
$smarty->compile_dir = $compileDir;

$router->run($_SERVER["REQUEST_URI"]);
