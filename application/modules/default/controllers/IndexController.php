<?php
/**
 * @package Default
 */
class Default_IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $this->_redirect('project');
    }
}