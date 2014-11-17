<?php
/*
   * component 	oeJ! nonothing for Joomla! 3.x
   * version	1.0.0
   * copyright	2012 Ove Eriksson
   * license	GNU General Public License version 2 or later; see LICENSE.txt
*/
defined('_JEXEC') or die('Restricted access');

	$controller = JControllerLegacy::getInstance('Nonothing');

	$task = JFactory::getApplication()->input->getCmd('task');
	$controller->execute($task);

	$controller->redirect();
