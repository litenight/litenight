<?php

namespace App\Controllers;

/**
 * SiteController class
 */
class SiteController extends Controller
{
    public function index()
    {
        $this->renderView('/site/index', [
            'title' => 'This is Litenight!'
        ]);
    }
}
