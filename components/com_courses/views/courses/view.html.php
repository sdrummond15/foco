<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class CoursesViewCourses extends JViewLegacy {

    protected $courses;
    protected $filter;

    function display($tpl = null) {

        $this->courses = $this->get('Courses');
        $this->filter = $this->get('Filter');

        $doc = JFactory::getDocument();
        $doc->addStyleSheet('components/com_courses/css/style.css');
        $doc->addScript('components/com_courses/js/script.js');
        parent::display($tpl);
    }
}
