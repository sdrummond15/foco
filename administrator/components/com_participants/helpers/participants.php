<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_participants
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Participants component helper.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_participants
 * @since       1.6
 */
class ParticipantsHelper
{

    public static function getActions()
    {
        $user = JFactory::getUser();
        $result = new JObject;
        $assetName = 'com_participants';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }
        return $result;

    }

}