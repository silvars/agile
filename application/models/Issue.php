<?php
/**
 * The Issue Model class is used to make custom queries.
 *
 * @category  Model
 * @access    public
 * @package   TechForTi
 * @version   0.1
 * @author    Thiago Soares <tcsoares84@gmail.com>
 * @see       http://www.techforti.com.br
 * @copyright Copyright (c) Tech For Soluções em TI
 */
class Application_Model_Issue extends Application_Model_DbTable_Project
{
    /**
     * Return all project titles.
     *
     * @access public
     * @return array
     */
    public function getProjecstByIds(array $params)
    {
        try {
            $select = $this->select()
                ->setIntegrityCheck(false)
                ->from(array('ji' => 'jiraissue'))
                ->join(array('p' => 'project'),
                    'ji.PROJECT=p.ID')
                ->join(array('it' => 'issuetype'),
                    'ji.issuetype=it.ID')
                ->order('ji.PROJECT')
                ->order('ji.issuestatus')
                ->where('PROJECT IN (?)', $params);

                die($select);
            // return $select;
        } catch (Exception $ex) {
            echo json_encode(array(
                'success' => false,
                'message' => $ex->getMessage(),
                'code'    => $ex->getCode()
            ));
        }
    }
}

