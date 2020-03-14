<?php

namespace Litenight;

use Litenight\Database\Connection;

/**
 * Application class
 */
class Application
{
    public $settings;

    public $components;

    function __construct(Settings $settings = null, $components = [])
    {
        $this->settings = $settings ?? new Settings(LITENIGHT_SETTINGS);
        $this->components = array_merge([
            'db' => new Connection($this->settings['db']),
        ], $components);
    }

    public function __set($key, $value) {
        $this->components[$key] = $value;
    }

    public function __get($key) {
        return $this->components[$key];
    }
}
