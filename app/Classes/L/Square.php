<?php

namespace App\L;

/**
 * Class Square
 */
class Square extends  Rectangle
{
    /**
     * @param int $height
     * 
     * @return void
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }

    /**
     * @param int $width
     * 
     * @return void
     */
    public function setWidth(int $width): void
    {
        $this->height = $width;
        $this->width = $width;
    }
}