<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_participant
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

// Include the component HTML helpers.
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');

$app = JFactory::getApplication();
$assoc = JLanguageAssociations::isEnabled();

$document = JFactory::getDocument();
$document->addStyleSheet('components/com_participants/assets/css/participants.css');
$document->addScript('components/com_participants/assets/js/jquery.maskcpfcnpj.js');
$document->addScript('components/com_participants/assets/js/jquery.maskMoney.js');
$document->addScript('components/com_participants/assets/js/jquery.noty.packaged.min.js');
$document->addScript('components/com_participants/assets/js/jquery.inputmask.bundle.js');
$document->addScript('components/com_participants/assets/js/script.js');
?>
<script type="text/javascript">
    Joomla.submitbutton = function (task)
    {
        if (task == 'participant.cancel' || document.formvalidator.isValid(document.id('participant-form')))
        {
            Joomla.submitform(task, document.getElementById('participant-form'));
        }
    }
</script>
<form action="<?php echo JRoute::_('index.php?option=com_participants&layout=edit&id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="participant-form" class="form-validate">

    <?php echo JLayoutHelper::render('joomla.edit.title_alias', $this); ?>
    <div class="form-personalizado">
        <div class="form-horizontal">
            <?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'details')); ?>

            <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'details', empty($this->item->id) ? JText::_('COM_PARTICIPANT_NEW_PARTICIPANT', true) : JText::_('COM_PARTICIPANT_EDIT_PARTICIPANT', true)); ?>
            <div class="row-fluid">
                <div class="span12">
                    <div class="row-fluid form-horizontal-desktop">
                        <div class="span6">
                            <?php echo $this->form->renderField('id_doing'); ?>
                            <?php echo $this->form->renderField('cpf'); ?>
                            <?php echo $this->form->renderField('email'); ?>
                            <?php echo $this->form->renderField('rg'); ?>
                            <?php echo $this->form->renderField('date_birth'); ?>
                            <?php echo $this->form->renderField('gender'); ?>
                            <?php echo $this->form->renderField('address'); ?>
                            <?php echo $this->form->renderField('number'); ?>
                            <?php echo $this->form->renderField('complement'); ?>
                            <?php echo $this->form->renderField('city'); ?>
                            <?php echo $this->form->renderField('state'); ?>
                            <?php echo $this->form->renderField('postal_code'); ?>
                            <?php echo $this->form->renderField('phone'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo JHtml::_('bootstrap.endTab'); ?>



            <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'publishing', JText::_('JGLOBAL_FIELDSET_PUBLISHING', true)); ?>
            <div class="row-fluid form-horizontal-desktop">
                <div class="span6">
                    <?php echo JLayoutHelper::render('joomla.edit.publishingdata', $this); ?>
                </div>
                <div class="span6">
                    <?php echo JLayoutHelper::render('joomla.edit.global', $this); ?>
                    <?php echo JLayoutHelper::render('joomla.edit.metadata', $this); ?>
                </div>
            </div>
            <?php echo JHtml::_('bootstrap.endTab'); ?>



            <?php if ($assoc) : ?>
                <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'associations', JText::_('JGLOBAL_FIELDSET_ASSOCIATIONS', true)); ?>
                <?php echo $this->loadTemplate('associations'); ?>
                <?php echo JHtml::_('bootstrap.endTab'); ?>
            <?php endif; ?>

            <?php echo JHtml::_('bootstrap.endTabSet'); ?>
        </div>
    </div>
    <input type="hidden" name="task" value="" />
    <?php echo JHtml::_('form.token'); ?>
</form>