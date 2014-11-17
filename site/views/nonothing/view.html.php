<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class NonothingViewNonothing extends JViewLegacy
{
	// Overwriting JView display method
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = 'Nonothing';

		// Display the view
		parent::display($tpl);
	}
}
