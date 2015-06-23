<?php
/**
*
* Auto Groups condition for the Spring Merit extension.
*
* @package PhpBB Extension - Spring Merit for Auto Groups
* @copyright (c) 2015 Tim Blokdijk
* @license http://opensource.org/licenses/MIT MIT License
*
*/

namespace spring\merit_autogroup\conditions\type;

/**
 * Merit autogroup class
 */
class merit extends \phpbb\autogroups\conditions\type\base
{
	/**
	 * Get condition type
	 *
	 * @return string Condition type
	 * @access public
	 */
	public function get_condition_type()
	{
	    return 'spring.merit_autogroup.autogroups.type.merit';
	}

	/**
	 * Get condition field
	 *
	 * @return string Condition field name
	 * @access public
	 */
	public function get_condition_field()
	{
		return 'user_spring_merit';
	}

	/**
	 * Get condition type name
	 *
	 * @return string Condition type name
	 * @access public
	 */
	public function get_condition_type_name()
	{
		return 'Merit';
	}

	/**
	 * Only the 'sync' action is tested and works, maybe it's possible to give an array of user id's.
	 * Sync tests all users for 'merit', users without merit are removed from the group.
	 *
	 * @param array $options Array of optional data
	 * @return array Array of users ids as keys and their condition data as values
	 * @access public
	 */
	public function get_users_for_condition($options = array())
	{
		// The user data this condition needs to check
		$condition_data = array(
			$this->get_condition_field(),
			# 'user_spring_merit_time', # Maybe it's interesting to add users only after having Merit for some time?
		);

		$sync = ($options['action'] == 'sync');

		// Merge default options, empty user array as the default
		$options = array_merge(array(
			'users'		=> array(),
			'action'	=> '',
		), $options);

		// Prepare the user ids data for use in the query
		$user_ids = $this->helper->prepare_users_for_query($options['users']);

		// Get data for the users to be checked (exclude bots and guests)
		$sql = 'SELECT user_id, ' . implode(', ', $condition_data) . '
			FROM ' . USERS_TABLE . '
			WHERE ' . $this->db->sql_in_set('user_id', $user_ids, $sync, true) . '
				AND user_type <> ' . USER_IGNORE;
		$result = $this->db->sql_query($sql);

		$user_data = array();
		while ($row = $this->db->sql_fetchrow($result))
		{
			$user_data[$row['user_id']] = $row;
		}
		$this->db->sql_freeresult($result);

		return $user_data;
	}

}
