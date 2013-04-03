<?php
/**
 * The Project is used to create form with Zend_Form.
 *
 * @category  Form
 * @access    public
 * @package   TechForTi
 * @version   0.1
 * @author    Thiago Soares <tcsoares84@gmail.com>
 * @see       http://www.techforti.com.br
 * @copyright Copyright (c) Tech For Soluções em TI
 */
class Application_Form_Project extends Zend_Form
{
    /**
     * Create the User form that will be used into add and edit user views.
     *
     * @access public
     * @return form
     */
    public function init()
    {
        $this->setName('user');
        $this->setAction('add')->setMethod('post');

        $filter = new Zend_Form_Element_Text('username');
        $filter->setLabel('Filtrar: ');
    }


}

