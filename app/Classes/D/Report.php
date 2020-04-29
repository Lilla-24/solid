<?php

namespace App\D;

use App\D\DInterfaces\IReport;

/**
 * Class Report
 */
class Report implements IReport
{
    /**
     * @var View
     */
    private $view;

    /**
     * Report constructor.
     *
     * @param View $view
     */
    public function __construct(View $view)
    {
        $this->view = $view;
    }

    /**
     * @return View
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param View $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }

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
        return $this->getView()->render($this->getDoctor(), $this->getPatient(),$this->getData());
    }
}