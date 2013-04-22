<?php
/**
 * @package Default
 **/
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * Returns the HTML Doctype that will be used in the layout.
     *
     * @access protected
     * @return string
     */
    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_TRANSITIONAL');
    }
}