<?php

namespace App\D;

use App\D\DInterfaces\IReport;
use App\D\DInterfaces\SaverInterface;

/**
 * Class ReportRepository
 */
class ReportRepository
{
    /**
     * @var $report
     * @var $save
     */
    private $report, $saver;

    //вместо объекта класса report указываем интерфейс, который должен реализовывать объект
    /**
     * ReportRepository constructor.
     *
     * @param IReport $report
     *
     * @param SaverInterface $saver
     */
    public function __construct($report, SaverInterface $saver)
    {
        $this->report = $report;
        $this->saver = $saver;
    }

    /**
     * @return void
     */
    public function save(): void
    {
        $this->saver->save($this->report->renderReport());
    }
}