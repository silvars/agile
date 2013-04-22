<?php
/**
 * @package Default
 */
class Default_ProjectController extends Zend_Controller_Action
{
    /**
     * @var Default_Model_Project
     */
    private $_model;
    /**
     * Description here.
     *
     * @access public
     * @return ???
     */
    public function init()
    {
        $this->_model = new Default_Model_Project();
    }

    /**
     * Description here . . . 
     *
     * @access public
     * @return array
     */
    public function indexAction()
    {
        if ($this->getRequest()->isPost()) {
            try {
                die("XX");
                $project = new Default_Application_Model_Project();
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

        $this->view->titles = $this->_model->getProjectTitles();
    }
}