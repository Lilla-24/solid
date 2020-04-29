<?php

namespace App\O;

use App\O\SaverInterface\SaverInterface;

/**
 * Class FIleSave
 */
class FIleSave implements SaverInterface
{
    /**
     * @var $filepath
     */
    private $filepath;

    /**
     * FIleSave constructor.
     * 
     * @param $filepath
     */
    public function __construct($filepath)
    {
        $this->filepath = $filepath;
    }

    /**
     * @param $data
     */
    public  function save($data): void
    {
        file_put_contents($this->filepath, $data);
    }
}