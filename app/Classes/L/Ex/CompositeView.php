<?php

namespace App\L\Ex;

/**
 * Class CompositeView
 */
class CompositeView extends AbstractView
{
    /**
     * @var array
     */
    protected  $_views = [];

    /**
     * @param AbstractView $view
     * 
     * @return bool
     */
    public function addView(AbstractView $view): bool
    {
        $this->_views[] = $view;

        return true;
    }

    /**
     * @param array $views
     * 
     * @return void
     */
    public function addViews(array $views): void
    {
        foreach ($views as $view) {
            $this->addView($view);
        }
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $output = "";

        if (null !== $this->_views) {
            foreach ($this->_views as $view) {
                $output .= $view->render();
            }
        }

        $output .= $this->_render();
        
        return $output;
    }
}