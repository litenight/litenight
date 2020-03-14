<?php

namespace Litenight\Views;

/**
 * TemplateNotFoundException class
 */
class TemplateNotFoundException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Template not found', 404);
    }
}
