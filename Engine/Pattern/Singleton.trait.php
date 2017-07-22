<?php

namespace TestProject\Engine\Pattern;

trait Singleton
{
    use Base;

    protected static $_oInstance = null;

    /**
     * Get instance of class.
     *
     * @access public
     * @static
     * @return
     */
    public static function getInstance()
    {
        return (null === static::$_oInstance) ? static::$_oInstance = new static : static::$_oInstance;
    }
}
