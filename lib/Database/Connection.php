<?php

namespace Litenight\Database;

/**
 * Connection class
 */
class Connection implements ConnectionInterface
{
    /**
     * @var string $_connection Databnase connection
     */
    private $_connection;

    /**
     * @var string $driver Database driver
     */
    protected $driver;

    /**
     * @var string $host Database host
     */
    protected $host;

    /**
     * @var int $port Database host port
     */
    protected $port;

    /**
     * @var string $user Database username
     */
    protected $username;

    /**
     * @var string $password Password of the database user
     */
    protected $password;

    /**
     * @var string $database Name of the database
     */
    protected $database;

    function __construct($driver, $host, $port, $username, $password, $database)
    {
        $this->driver = $driver;
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->_connection = new PDO();
    }
}
