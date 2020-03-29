<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class CoursesViewInscrever extends JViewLegacy {

    function display($tpl = null) {

        $doc = JFactory::getDocument();
        $doc->addStyleSheet('components/com_courses/css/style.css');
        $doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
        $doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap-responsive.min.css');
        $doc->addScript('components/com_courses/js/jquery.inputmask.bundle.js');
        $doc->addScript('components/com_courses/js/jquery.maskcpfcnpj.js');
        $doc->addScript('components/com_courses/js/jquery.maskedinput.min.js');
        $doc->addScript('components/com_courses/js/jquery.noty.packaged.min.js');
        $doc->addScript('components/com_courses/js/script.js');

        $this->inscrever = $this->get('Inscrever');

        parent::display($tpl);
    }
}
