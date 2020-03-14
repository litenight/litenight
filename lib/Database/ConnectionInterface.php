<?php

namespace Litenight\Database;

/**
 * ConnectionInterface interface
 */

interface ConnectionInterface
{
    public function getColumns($tablename) {}
}
