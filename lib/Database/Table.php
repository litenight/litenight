<?php

namespace Litenight\Database;

/**
 * Table class
 */
class Table
{
    /**
     * @var \Litenight\Database\Connection $connection Database connection
     */
    protected $connection;

    /**
     * @var string $tablename Name of the table
     */
    protected $table;

    function __construct(ConnectionInterface $connection, string $tablename)
    {
        $this->connection = $connection;
        $this->tablename = $tablename;
    }

    public function getColumns()
    {
        // code...
    }
}
