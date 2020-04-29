<?php

namespace App\D\DInterfaces;

/**
 * Interface SaverInterface
 */
interface SaverInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function save($data);
}