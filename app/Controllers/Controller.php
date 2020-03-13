<?php

namespace App\Controllers;

/**
 *
 */
class Controller
{

    function __construct()
    {
        // code...
    }

    /**
     * Renders the given data to JSON format and output
     * @param array $data Array of data to render
     */
    public function renderJson($data = [])
    {
        echo json_encode($value);
    }

    /**
     * Renders the given data to JSON format and output
     * @param array $data Array of data to render
     */
    public function renderView($view, $data = [])
    {
        echo json_encode($value);
    }
}
