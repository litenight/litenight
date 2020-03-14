<?php

namespace App\Controllers;

use Litenight\Application;
use Litenight\Views\Template;

/**
 *
 */
class Controller
{
    protected $application;

    protected $template;

    function __construct(Application $application, Template $template = null)
    {
        $this->application = $application ?? new Application();
        $this->template = $template ?? new Template();
    }

    /**
     * Renders the given data to JSON format and output
     * @param array $data Array of data to render
     */
    public function renderJson($data = [])
    {
        echo json_encode($data);
    }

    /**
     * Renders the given data to JSON format and output
     * @param string $view Relative path of the view file
     * @param array $data Array of data to render
     */
    public function renderView($view, $data)
    {
        echo $this->template->render($view, $data);
    }
}
