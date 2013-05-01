<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_lendr
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Lendr component helper.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_lendr
 * @since       1.6
 */
class LendrHelpersLendr
{
	public static $extension = 'com_lendr';

	/**
	 * @return  JObject
	 */
	public static function getActions()
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		$assetName = 'com_lendr';
		$level = 'component';

		$actions = JAccess::getActions('com_lendr', $level);

		foreach ($actions as $action)
		{
			$result->set($action->name,	$user->authorise($action->name, $assetName));
		}

		return $result;
	}
}