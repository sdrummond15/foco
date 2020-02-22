<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class DoingsViewDoings extends JViewLegacy {

    protected $doings;

    function display($tpl = null) {

        $this->doings = $this->get('Doings');

        $doc = JFactory::getDocument();
        $doc->addStyleSheet('components/com_doings/css/style.css');
        parent::display($tpl);
    }
}
