<?php

namespace App\L;

/**
 * Class Rectangle
 */
class Rectangle
{
    /**
     * @var $width
     */
    protected  $width;

    /**
     * @var $height
     */
    protected  $height;

    /**
     * Rectangle constructor.
     * 
     * @param $width
     * @param $height
     */
    public function __construct($width = 0, $height = 0)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * 
     * @return void
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * 
     * @return void
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function area(): int 
    {
        return $this->width * $this->height;
    }
}