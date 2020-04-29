<?php

namespace App\L\Ex;

/**
 * Class PartialView
 */
class PartialView extends AbstractView
{
    /**
     * @param AbstractView $view
     * 
     * @throws \Exception
     */
    public function addView(AbstractView $view)
    {
        throw new \Exception("Unable to add view");
    }

    /**
     * @param array $views
     * 
     * @throws \Exception
     */
    public function addViews(array $views)
    {
        throw new \Exception("Unable to add views");
    }

    /**
     * @return false|string
     */
    public function render()
    {
        return $this->_render();
    }
}