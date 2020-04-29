<?php

namespace App\S\TemplateInterface;

/**
 * Interface TemplateInterface
 */
interface TemplateInterface
{
    /**
     * @param string $data
     */
    public function render(string $data);
}