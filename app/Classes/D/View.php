<?php


namespace App\D;

/**
 * Class View
 */
class View
{
    //модуль view один для всех, меняться не будет
    /**
     * @param $doctor
     * @param $patient
     * @param $data
     *
     * @return string
     */
    public function render($doctor, $patient, $data)
    {
        return $doctor.'<br>'.$patient.'<br>'.$data;
    }
}