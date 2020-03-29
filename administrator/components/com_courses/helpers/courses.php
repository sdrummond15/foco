<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_courses
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Courses component helper.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_courses
 * @since       1.6
 */
class CoursesHelper
{

    public static function getActions()
    {
        $user = JFactory::getUser();
        $result = new JObject;
        $assetName = 'com_courses';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }
        return $result;

    }

}