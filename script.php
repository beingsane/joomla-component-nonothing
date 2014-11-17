<?php
/*
   * component 	oeJ! nonothing for Joomla! 3.x
   * version	1.0.0
   * copyright	2012 Ove Eriksson
   * license	GNU General Public License version 2 or later; see LICENSE.txt
*/
defined('_JEXEC') or die('Restricted access');

/**
 * Script file removes the auto created backend menu item
 */
class com_nonothingInstallerScript
{
	/**
	 * method to run after an install/update method
	 *
	 * @return void
	 */
	function postflight($type, $parent)
	{

		$db = JFactory::getDbo();

		$query = $db->getQuery(true);

		// get the extension id, did not get this into the delete
		$query->select($db->quoteName('extension_id'))
			->from($db->quoteName('#__extensions'))
			->where($db->quoteName('element') . ' = '. $db->quote('com_nonothing'));

		$db->setQuery($query);

		//echo $query;

		try
		{
			$component_id = $db->loadResult();
		}
		catch (RuntimeException $e)
		{
			JFactory::getApplication()->enqueueMessage($e->getMessage(), 'error');
			return;
		}

 		// removes the auto created backend menu item
		if ($component_id)
		{
			$query->clear()
				->delete($db->quoteName('#__menu'))
				->where($db->quoteName('component_id') . ' = '. $component_id)
				->where($db->quoteName('client_id') . ' = 1');

			$db->setQuery($query);

			echo $query;

			try
			{
//				$db->execute();
			}
			catch (RuntimeException $e)
			{
				JFactory::getApplication()->enqueueMessage($e->getMessage(), 'error');
				return;
			}
		}
	}
}
