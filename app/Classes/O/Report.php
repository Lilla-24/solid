<?php

namespace App\O;

/**
 * Class Report
 */
class Report
{
    /**
     * @return string
     */
    public function getDoctor(): string
    {
        return "Doctor";
    }

    /**
     * @return string
     */
    public function getPatient(): string
    {
        return "Patient";
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return "Data";
    }

    /**
     * @return string
     */
    public function renderReport(): string 
    {
        return $this->getDoctor().'<br>'.$this->getPatient().'<br>'.$this->getData();
    }
}