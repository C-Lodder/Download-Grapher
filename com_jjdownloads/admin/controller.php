<?php
/**
 * @package    JoomJunk_Downloads
 * @copyright  (C) 2012 JoomJunk. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 **/
defined('_JEXEC') or die('Direct Access.');

jimport('joomla.application.component.controller');

class jjdownloadsController extends JController
{

	public function display()
	{
		JSubMenuHelper::addEntry(
			JText::_('COM_JJ_DOWNLOADS_LAST') . ' ' .
			$weeks = JComponentHelper::getParams('com_jjdownloads')->get('weeks', 5) . ' ' . JText::_('COM_JJ_DOWNLOADS_WEEKS'),
			'index.php?option=com_jjdownloads&view=jjdownloads'
		);

		JSubMenuHelper::addEntry(JText::_('COM_JJ_DOWNLOADS_TOTALS'), 'index.php?option=com_jjdownloads&amp;view=totaldownloads');
		parent::display();
	}
}
