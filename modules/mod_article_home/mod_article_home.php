<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_article_single
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base(true) . '/modules/mod_article_home/assets/css/style.css');

$article1 = $params->get('article');
$link1 = $params->get('link');
$article2 = $params->get('article2');
$link2 = $params->get('link2');

$articles = ModArticleHomeHelper::getArticleHome($article1.','.$article2);

require JModuleHelper::getLayoutPath('mod_article_home', $params->get('layout', 'default'));

