<?php

namespace App\S;

use App\S\TemplateInterface\TemplateInterface;

/**
 * Class HtmlTemplate
 */
class HtmlTemplate implements TemplateInterface
{
    /**
     * @param string $data
     *
     * @return mixed|void
     */
    public function render(string $data)
    {
        echo '<h1>'. $data .'</h1>';
    }
}