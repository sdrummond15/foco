<?php
defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('Courses');
$controller->execute(JRequest::getVar('task', 'click'));
$controller->redirect();
