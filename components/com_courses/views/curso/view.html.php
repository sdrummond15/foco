<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class CoursesViewCurso extends JViewLegacy {

    function display($tpl = null) {

        $doc = JFactory::getDocument();
        $doc->addStyleSheet('components/com_courses/css/style.css');

        $this->curso = $this->get('Curso');

        parent::display($tpl);
    }
}
