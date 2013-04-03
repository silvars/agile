<?php
/**
 * The bootstrap class is used to load common components or resources that are
 * used by all or most of your controllers, views etc.
 *
 * @category  Bootstrap
 * @access    public
 * @package   TechForTi
 * @version   0.1
 * @author    Thiago Soares <tcsoares84@gmail.com>
 * @see       http://www.techforti.com.br
 * @copyright Copyright (c) Tech For Soluções em TI
 */
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
