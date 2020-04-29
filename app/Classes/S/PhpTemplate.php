<?php

namespace App\S;

use App\S\TemplateInterface\TemplateInterface;

/**
 * Class PhpTemplate
 */
class PhpTemplate implements TemplateInterface
{
    /**
     * @param $data
     *
     */
    public function render($data)
    {
        echo '<h2>'. $data .'</h2>';
    }
}