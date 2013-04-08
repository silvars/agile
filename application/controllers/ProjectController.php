<?php
/**
 * The ProjectController class is used to set all Project actions.
 *
 * @category  Controller
 * @access    public
 * @package   TechForTi
 * @version   0.1
 * @author    Thiago Soares <tcsoares84@gmail.com>
 * @see       http://www.techforti.com.br
 * @copyright Copyright (c) Tech For Soluções em TI
 */
class ProjectController extends Zend_Controller_Action
{
    public function indexAction()
    {
        if ($this->getRequest()->isPost()) {
            try {
                $project = new Application_Model_Issue();
                die(print_r($project->getProjecstByIds($this->getRequest()->getPost())));
                // $project->getProjecstByIds($this->getRequest()->getPost());
            } catch (Exception $ex) {
                echo json_encode(array(
                    'success' => false,
                    'message' => $ex->getMessage(),
                    'code'    => $ex->getCode()
                ));
            }
        }
        $project = new Application_Model_Project();
        $this->view->titles = $project->getProjectTitles();
    }
}