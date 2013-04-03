<?php
/**
 * The Project class is used to mapping project table.
 *
 * @category  DBTable
 * @access    public
 * @package   TechForTi
 * @version   0.1
 * @author    Thiago Soares <tcsoares84@gmail.com>
 * @see       http://www.techforti.com.br
 * @copyright Copyright (c) Tech For Soluções em TI
 */
class Application_Model_DbTable_Project extends Zend_Db_Table_Abstract
{
    protected $_name = 'project';
    protected $_primary = 'ID';
}