<?php

defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();

?>
<div class="doings">
    <h2>Eventos</h2>
    <div class="list-doings">
        <?php foreach ($this->doings as $doing): ?>
            <div class="doing">
                <?php
                $image = 'images/amda.jpg';
                if (!empty($doing->image)) {
                    $image = $doing->image;
                }

                setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');
                ?>
                <div class="doing-img">
                    <a href="<?php echo JRoute::_('index.php?option=com_doings&view=evento&id=' . $doing->id); ?>">
                        <span style="background-image: url(<?php echo $image; ?>)"></span>
                    </a>
                </div>
                <div class="doing-desc">
                    <div class="doing-data">
                        <h4>
                            <?php echo strftime('%d', strtotime($doing->date_start)); ?>
                        </h4>
                        <h3>
                            <?php echo strftime('%b', strtotime($doing->date_start)); ?>
                            <span>
                                <?php echo strftime('%Y', strtotime($doing->date_start)); ?>
                            </span>
                        </h3>
                    </div>
                    <div class="doing-locale">
                        <h1>
                            <a href="<?php echo JRoute::_('index.php?option=com_doings&view=evento&id=' . $doing->id); ?>">
                                <?php echo $doing->name; ?>
                            </a>
                        </h1>
                        <p>
                            <a href="<?php echo JRoute::_('index.php?option=com_doings&view=evento&id=' . $doing->id); ?>">
                                <?php echo ($doing->local) ? $doing->local : $doing->city . ' - ' . $doing->uf; ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script>
        jQuery(function ($) {
            $(window).on('resize', function () {

                $('.doing-img').each(function () {
                    $(this).height($(this).width() * 0.75);
                });

            }).trigger('resize');
        });
    </script>
