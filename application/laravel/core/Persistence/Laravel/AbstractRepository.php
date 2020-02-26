<?php

namespace Core\Persistence\Laravel;

abstract class AbstractRepository
{
    protected $dbh;

    public function __construct()
    {
        $configConnection
            = 'database.connections.' . config('database.default');
        $driver = config($configConnection . '.driver');
        $dbname = config($configConnection . '.database');
        $host = config($configConnection . '.host');
        $dns = $driver . ':' . 'dbname=' . $dbname . ';host=' . $host;
        $user = config($configConnection . '.username');
        $password = config($configConnection . '.password');
        $this->dbh = new \PDO($dns, $user, $password);
    }
}
