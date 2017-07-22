<?php

namespace TestProject\Engine\Pattern;

trait Singleton
{
    use Base;

    protected static $_oInstance = null;

    /** intancia de clases
     */
    public static function getInstance()
    {
        return (null === static::$_oInstance) ? static::$_oInstance = new static : static::$_oInstance;
    }
}
