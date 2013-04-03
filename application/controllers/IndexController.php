<?php
/**
 * The class IndexController is used to set the initial way of the project..
 *
 * @category  Controller
 * @access    public
 * @package   TechForTi
 * @version   0.1
 * @author    Thiago Soares <tcsoares84@gmail.com>
 * @see       http://www.techforti.com.br
 * @copyright Copyright (c) Tech For Soluções em TI
 */
class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $this->_redirect('project');
    }
}