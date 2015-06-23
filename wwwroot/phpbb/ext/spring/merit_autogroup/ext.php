<?php
/**
*
* Spring Merit - Auto Groups extension.
*
* @package PhpBB Extension - Spring Merit for Auto Groups
* @copyright (c) 2015 Tim Blokdijk
* @license http://opensource.org/licenses/MIT MIT License
*
*/

namespace spring\merit_autogroup;

/**
* Check dependencies and uninstall routine.
*/
class ext extends \phpbb\extension\base
{
	/**
	* Check if Spring Merit and PhpBB Auto Groups are enabled.
	*/
	public function is_enableable()
	{
		$ext_manager = $this->container->get('ext.manager');

		return ($ext_manager->is_enabled('phpbb/autogroups') && $ext_manager->is_enabled('spring/merit'));
	}

	/**
	* This method is required
	*/
	public function purge_step($old_state)
	{
		switch ($old_state)
		{
			case '':
				try
				{
					// Try to remove this extension from auto groups db tables
					$autogroups = $this->container->get('phpbb.autogroups.manager');
					$autogroups->purge_autogroups_type('spring.merit_autogroup.autogroups.type.merit');
				}
				catch (\InvalidArgumentException $e)
				{
					// Continue
				}

				return 'autogroups';
			break;

			default:
				return parent::purge_step($old_state);
			break;
		}
	}
}
