<?php

defined('_JEXEC') or die;

$controller	= JControllerLegacy::getInstance('Bablog');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
