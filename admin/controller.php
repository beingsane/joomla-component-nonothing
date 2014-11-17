<?php
/*
   * component 	oeJ! nonothing for Joomla! 3.x
   * version	1.0.0
   * copyright	2012 Ove Eriksson
   * license	GNU General Public License version 2 or later; see LICENSE.txt
*/
defined('_JEXEC') or die('Restricted access');

class NonothingController extends JControllerLegacy
{
	function display($cachable = false, $urlparams = false)
	{
			$this->setError(JText::_('COM_NONOTHING_ERROR'));
			$this->setMessage($this->getError(), 'error');
			$this->setRedirect(JRoute::_('index.php', false));

			return false;
	}
}
