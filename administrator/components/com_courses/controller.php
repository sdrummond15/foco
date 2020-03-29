<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_courses
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class CoursesController extends JControllerLegacy
{
    protected $default_view = 'courses';
    
    public function display($cachable = false, $urlparams = false)
    {
    
        require_once JPATH_COMPONENT.'/helpers/courses.php';
        
        $view = JRequest::getCmd('view', 'courses');
        $layout = JRequest::getCmd('layout', 'default');
        $view = JRequest::getCmd('id');
        
        parent::display();
        
        return $this;

    }
}
