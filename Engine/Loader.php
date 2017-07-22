<?php

namespace TestProject\Engine;

use TestProject\Engine\Pattern\Singleton;

require_once __DIR__ . '/Pattern/Base.trait.php';
require_once __DIR__ . '/Pattern/Singleton.trait.php';

class Loader
{
    use Singleton;

    public function init()
    {

        spl_autoload_register(array(__CLASS__, '_loadClasses'));
    }

    private function _loadClasses($sClass)
    {
        $sClass = str_replace(array(__NAMESPACE__, 'TestProject', '\\'), '/', $sClass);

        if (is_file(__DIR__ . '/' . $sClass . '.php'))
            require_once __DIR__ . '/' . $sClass . '.php';

        if (is_file(ROOT_PATH . $sClass . '.php'))
            require_once ROOT_PATH . $sClass . '.php';
    }
}
