<?php

namespace App\O;

use App\O\SaverInterface\SaverInterface;

/**
 * Class ReportRepository
 */
class ReportRepository
{
    /**
     * @var $report
     * @var $saver
     */
    private $report, $saver;

    /**
     * ReportRepository constructor.
     *
     * @param Report $report
     * @param SaverInterface $saver
     */
    public function __construct(Report $report, SaverInterface $saver)
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