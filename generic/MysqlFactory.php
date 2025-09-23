<?php
namespace generic;

use generic\MysqlSingleton;

class MysqlFactory{
    public MysqlSingleton $banco;
    public function __construct()
    {
        $this->banco = MysqlSingleton::getInstance();
    }
}
