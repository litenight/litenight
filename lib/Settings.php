<?php

namespace Litenight;

/**
 *
 */
class Settings
{
    protected $properties;

    function __construct($properties = [])
    {
        $this->properties = array_merge([

        ], $properties);
    }
}
