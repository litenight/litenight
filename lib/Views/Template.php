<?php

namespace Litenight\Views;

/**
 * Template class
 */
class Template
{
    private $_baseViewPath;
    private $_extension;

    public $properties;

    public function __construct($basePath = '../views', $defaultExtension = 'php')
    {
        $this->_baseViewPath = $basePath;
        $this->_extension = $defaultExtension;
        $this->properties = [];
    }

    /**
     * Renders a view file with a set of data
     * @param string $view Relative path of the view file to be rendered. Must start with a leadng /. Eg: `'/product/details'`
     * @param array $data Set of data to render in view
     */
    public function render($view, $data = [])
    {
        $path = $this->_baseViewPath . $view . '.' . $this->_extension;
        $this->properties = array_merge($this->properties, $data);

        ob_start();
        if (file_exists($path)) {
            include($path);
        } else throw new TemplateNotFoundException();
        return ob_get_clean();
    }

    /**
     * Magic method for setting properties
     * @param string $key The property key
     * @param mixed $value The value of the property
     */
    public function __set($key, $value)
    {
        $this->properties[$key] = $value;
    }

    /**
     * Magic method for getting properties
     * @param string $key The property key
     */
    public function __get($key)
    {
        return $this->properties[$key];
    }
}
