<?php
/**
 * @package Default
 */   
class Default_Model_Project
{
    /**
     * Return all project titles.
     *
     * @access public
     * @return array
     */
    public function getProjectTitles()
    {
        try {
            $sql = $this->select()
                ->from('project', array('ID', 'pname'));

        return $this->fetchAll($sql);
        } catch (Exception $ex) {
            echo json_encode(array(
                'success' => false,
                'message' => $ex->getMessage(),
                'code'    => $ex->getCode()
            ));
        }
    }

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

            return $select;
        } catch (Exception $ex) {
            echo json_encode(array(
                'success' => false,
                'message' => $ex->getMessage(),
                'code'    => $ex->getCode()
            ));
        }
    }
}