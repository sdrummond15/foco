<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_events_latest
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::registerPrefix('DoingsModel', JPATH_SITE . '/components/com_doings/models');

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

if(count($events) > 0):
?>
<div id="latest-list" class="latest<?php echo $moduleclass_sfx; ?>">
    <h1>
        <a href="<?= JRoute::_('index.php?Itemid=' . $params->get('menuevent')) ?>"><?= $module->title ?></a>
    </h1>
    <div id="all-latest">
        <?php foreach ($events as $doing) : ?>
            <div class="latest">
                <div class="data">
                    <a href="<?php echo JRoute::_('index.php?Itemid=' . $params->get('menuevent')) . '/evento/' . $doing->id; ?>">
                        <span>
                            <span>
                                <?php echo strftime('%d', strtotime($doing->date_start)); ?>
                            </span>
                            <span>
                                <?php echo strftime('%b', strtotime($doing->date_start)); ?>
                            </span>
                        </span>
                    </a>
                </div>
                <h2>
                    <a href="<?php echo JRoute::_('index.php?Itemid=' . $params->get('menuevent')) . '/evento/' . $doing->id; ?>">
                        <?php echo $doing->name; ?>
                    </a>
                </h2>
            </div>
        <?php endforeach; ?>
        <div class="all-events">
            <a href="<?= JRoute::_('index.php?Itemid=' . $params->get('menuevent')) ?>" class="btn btn-all-events">
                <span>Agenda completa</span>
            </a>
        </div>
    </div>
</div>
<?php endif; ?>