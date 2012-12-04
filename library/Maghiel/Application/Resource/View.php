<?php
/**
 * Maghiel Library
 * All rights reserved
 */

/**
 * View resource
 * 
 * @category    Maghiel
 * @package     Application
 * @subpackage  Resource
 * @author      Maghiel Dijksman <mail@mdijksman.nl>
 */
class Maghiel_Application_Resource_View
    extends Zend_Application_Resource_ResourceAbstract
{
    /**
     * @var Zend_View
     */
    protected $_view;

    /**
     * Instantiate view object and set head options (title, meta tags, etc)
     *
     * @return Zend_View
     */
    public function init()
    {
        if (null !== $this->_view) {
            return $this->_view;
        }

        $options = $this->getOptions();
        $view = new Zend_View();
        $view->headTitle($options['title']);
        $view->headTitle()->setSeparator('-');
        $view->doctype($options['doctype']);

        $renderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
        $renderer->setView($view);

        $this->_view = $view;

        return $this->_view;
    }

}
