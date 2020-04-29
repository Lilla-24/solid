<?php

namespace App\D;

use App\D\DInterfaces\SaverInterface;

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
     *
     * @return mixed|void
     */
    public  function save($data) {
        file_put_contents($this->filepath, $data);
    }
}