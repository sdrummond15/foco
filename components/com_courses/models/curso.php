<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');


class CoursesModelCurso extends JModelLegacy
{

    public static function getCurso($id = '')
    {
        $id = JRequest::getVar('id');

        $results = '';
        if (!empty($id)) {
            $db = JFactory::getDBO();
            $query = $db->getQuery(true);
            $query->select('*');
            $query->from('#__courses As d');
            $query->where('d.published = 1');
            $query->where('d.id = ' . $id);

            $db->setQuery($query);
            $results = $db->loadObjectList();
        }
        return $results;

    }

}