<?php

namespace App\D\DInterfaces;

/**
 * Interface IReport
 */
interface IReport
{
    /**
     * @return string
     */
    public function renderReport(): string;
}