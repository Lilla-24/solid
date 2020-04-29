<?php

namespace App\L\Ex;

use Exception;

/**
 * Class AbstractView
 */
abstract class AbstractView
{
    /**
     * @var $content
     */
    public $content;

    /**
     * @var $_template
     */
    protected $_template;

    /**
     * AbstractView constructor.
     *
     * @param null $template
     *
     * @throws Exception
     */
    public function __construct($template = null)
    {
        if(null !== $template) {
            $this->setTemplate($template);
        }
    }

    /**
     * @param $template
     *
     * @throws Exception
     *
     * @return void
     */
    public function setTemplate($template): void
    {
        $template = TEMPLATE . '/templates'.DIRECTORY_SEPARATOR. $template;

        if(!file_exists($template)) {
            throw new Exception('Template not exists');
        }

        $this->_template = $template;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->_template;
    }

    /**
     * @return false|string
     */
    protected  function _render() 
    {
        if(null !== $this->_template) {
            extract(['content' => $this->content]);
            ob_start();
            include($this->_template);

            return ob_get_clean();
        }

        return '';
    }

    abstract public function addView(AbstractView $view);
    abstract public function addViews(array $views);
    abstract public function render();
}