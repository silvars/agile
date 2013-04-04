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
class Application_Model_Issue extends Application_Model_DbTable_Project
{
    /**
     * Return all project titles.
     *
     * @access public
     * @return array
     */
    public function getAllIssues()
    {
        try {
            $sql = $this->getAdapter()->query("SELECT * FROM project")->fetchAll();
            return $sql;
        } catch (Exception $ex) {
            echo json_encode(array(
                'success' => false,
                'message' => $ex->getMessage(),
                'code'    => $ex->getCode()
            ));
        }
    }
    /*
    SELECT jiraissue.ID, jiraissue.pkey, jiraissue.PROJECT, project.ID, project.pname, project.URL, project.LEAD, project.DESCRIPTION, project .pkey, jiraissue.REPORTER, jiraissue.ASSIGNEE, jiraissue.issuetype, jiraissue.SUMMARY, jiraissue.DESCRIPTION, jiraissue.ENVIRONMENT, jiraissue.issuestatus, jiraissue.TIMEORIGINALESTIMATE, jiraissue.TIMEESTIMATE, jiraissue.TIMESPENT, issuetype.ID, issuetype.SEQUENCE, issuetype.pname, issuetype.pstyle, issuetype.DESCRIPTION
    FROM jiraissue
    JOIN project
    ON jiraissue.PROJECT=project.ID
    INNER JOIN issuetype
    ON jiraissue.issuetype=issuetype.ID
    LIMIT 13
    */
}

