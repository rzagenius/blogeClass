<?php
//configuracion de rutas y validacion de version php de servidor
namespace TestProject;

use TestProject\Engine as E;

if (version_compare(PHP_VERSION, '5.5.0', '<'))
    exit('Tu  PHP version de ' . PHP_VERSION . '. Este blog requiere PHP 5.5 o superior.');
if (!extension_loaded('mbstring'))
    exit('Este blog requiere "mbstring" extensión PHP. Instala por favor.');



define('PROT', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://');
define('ROOT_URL', PROT . $_SERVER['HTTP_HOST'] . str_replace('\\', '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))) . '/');
define('ROOT_PATH', __DIR__ . '/');

try
{
    require ROOT_PATH . 'Engine/Loader.php';
    E\Loader::getInstance()->init();
    $aParams = ['ctrl' => (!empty($_GET['p']) ? $_GET['p'] : 'blog'), 'act' => (!empty($_GET['a']) ? $_GET['a'] : 'index')];
    E\Router::run($aParams);
}
catch (\Exception $oE)
{
    echo $oE->getMessage();
}
