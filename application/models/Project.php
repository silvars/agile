<?php
/**
 * The Project Model class is used to make custom queries.
 *
 * @category  Model
 * @access    public
 * @package   TechForTi
 * @version   0.1
 * @author    Thiago Soares <tcsoares84@gmail.com>
 * @see       http://www.techforti.com.br
 * @copyright Copyright (c) Tech For Soluções em TI
 */
class Application_Model_Project extends Application_Model_DbTable_Project
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
                ->from('project');

        return $this->fetchAll($sql);
        } catch (Exception $ex) {
            echo json_encode(array(
                'success' => false,
                'message' => $ex->getMessage(),
                'code'    => $ex->getCode()
            ));
        }
    }

    public function getProjectById($id)
    {
        try {
            $sql = $this->getAdapter()->query("
                SELECT jiraissue.ID, jiraissue.pkey, jiraissue.PROJECT, project.ID, project.pname, project.URL, project.LEAD, project.DESCRIPTION, project .pkey, jiraissue.REPORTER, jiraissue.ASSIGNEE, jiraissue.issuetype, jiraissue.SUMMARY, jiraissue.DESCRIPTION, jiraissue.ENVIRONMENT, jiraissue.issuestatus, jiraissue.TIMEORIGINALESTIMATE, jiraissue.TIMEESTIMATE, jiraissue.TIMESPENT, issuetype.ID, issuetype.SEQUENCE, issuetype.pname, issuetype.pstyle, issuetype.DESCRIPTION
                FROM jiraissue
                JOIN project
                ON jiraissue.PROJECT=project.ID
                INNER JOIN issuetype
                ON jiraissue.issuetype=issuetype.ID
                WHERE jiraissue.PROJECT = $id")->fetchAll();

            return $sql;
        } catch (Exception $ex) {
            echo json_encode(array(
                'success' => false,
                'message' => $ex->getMessage(),
                'code'    => $ex->getCode()
            ));
        }
    }
}