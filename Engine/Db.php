<?php


namespace TestProject\Engine;

class Db extends \PDO
{
    //construye conexion
    public function __construct()
    {
        $Driver[\PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES UTF8';
        parent::__construct('mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';', Config::DB_USR, Config::DB_PWD, $Driver);
        $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}
