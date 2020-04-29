<?php

namespace App\O\SaverInterface;

/**
 * Interface SaverInterface
 */
interface SaverInterface
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public function save($data);
}