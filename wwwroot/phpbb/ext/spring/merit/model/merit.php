<?php
/**
*
* @package PhpBB Extension - Spring Merit
* @copyright (c) 2015 Tim Blokdijk
* @license http://opensource.org/licenses/MIT MIT License
*
*/

namespace spring\merit\model;

class merit
{
	private $required_recommendations = 3; # If changed also update the requirements in $this->check() function.

	public $current_user = null; # TODO: Make private, used in subscriber.php
	public $related_user = null; # Also make private, used in subscriber.php
	private $checked = false;
	private $can_get = false;
	private $result = false;
	private $users_known = false;
	private $errors = array();
	private $requirements_messages = array();

	public function current_user($user_id) {
		# TODO: Check if user actually exists in DB and isn't a special user.
		# Variable should not change once set (to prevent problems with caching).
		# Note that $this->current_user is currently a public variable.
		$this->current_user = (int) $user_id;
	}

	public function related_user($user_id) {
		# TODO: Check if user actually exists in DB and isn't a special user.
		# Variable should not change once set (to prevent problems with caching).
		# Note that $this->related_user is currently a public variable.
		$this->related_user = (int) $user_id;
	}

	public function save_recommendation() {
		global $db, $table_prefix;
		# TODO: Ugly, these globals shouldn't be here.
		# Figure out how to do DB abstraction with PhpBB.
		# Or abstract it further so this model can be used independent from PhpBB.. this is probably the better idea.

		if (!is_int($this->current_user)) {
			trigger_error('$this->current_user should be set');
		}
		if (!is_int($this->related_user)) {
			trigger_error('$this->related_user should be set');
		}

		if ($this->check()) {
			# Only place where recommendations are added to DB.
			$db->sql_query('INSERT INTO ' . $table_prefix . 'spring_merit' . ' (merit_id, gave_merit, got_merit, time) VALUES (NULL , ' . (int) $this->current_user . ', ' . (int) $this->related_user . ', UNIX_TIMESTAMP())');

			#TODO: Cache the recommendations and +1 to cache.

			# Only place where 'merit' is set to true in DB.
			if ($this->recommendations($this->required_recommendations, 'related_user')) {
				$db->sql_query('UPDATE ' . USERS_TABLE . ' SET user_spring_merit = 1, user_spring_merit_time = UNIX_TIMESTAMP() WHERE user_spring_merit = 0 AND user_id = ' . (int) $this->related_user);
			}
		}
	}

	public function gave_recommendation() { # TODO: Merge with got_recommendation() function. Cache results.
		global $db, $table_prefix;

		$db->sql_query('SELECT COUNT(*) AS gave FROM ' . $table_prefix . 'spring_merit' . ' WHERE got_merit = ' . (int) $this->related_user . ' AND gave_merit = ' . (int) $this->current_user);
		return ($db->sql_fetchfield('gave') >= 1) ? true : false;
	}

	public function got_recommendation() {
		global $db, $table_prefix;

		$db->sql_query('SELECT COUNT(*) AS gave FROM ' . $table_prefix . 'spring_merit' . ' WHERE got_merit = ' . (int) $this->current_user . ' AND gave_merit = ' . (int) $this->related_user);
		return ($db->sql_fetchfield('gave') >= 1) ? true : false;
	}

	public function can_give() {
		return $this->check();
	}

	public function can_get() {
		$this->check();
		return $this->can_get;
	}

	public function requirements_messages() {
		$this->check();
		return $this->requirements_messages;
	}

	public function error_messages() {
		$this->check();
		return $this->errors;
	}

	public function registration($days = null, $user = 'current_user') { # TODO: Cache results.
		global $db; # FIXME: Sql in this function is probably only compatible with MySql/MariaDB.
		if (is_string($user)) {
			$user = $this->$user;
		}
		if (!is_int($user)) {
			trigger_error('$user should be set');
		}

		if (is_null($days)) {
			$db->sql_query('SELECT DATEDIFF(CURDATE(), FROM_UNIXTIME(user_regdate)) as days FROM ' . USERS_TABLE . ' WHERE user_id = ' . (int) $user);
			return (int) $db->sql_fetchfield('days'); # Returning days since registration.
		} elseif (is_int($days)) {
			$db->sql_query('SELECT COUNT(*) as older FROM ' . USERS_TABLE . ' WHERE user_id = ' . (int) $user . ' AND user_regdate < (UNIX_TIMESTAMP() - ' . (int) $days*24*60*60 . ')');
			return (bool) $db->sql_fetchfield('older'); # Returning true if $user registration is older then $days.
		}
	}

	public function recommendations($amount = null, $user = 'current_user') { # TODO: Cache results.
		global $db, $table_prefix;
		if (is_string($user)) {
			$user = $this->$user;
		}
		if (!is_int($user)) {
			trigger_error('$user should be set');
		}

		$db->sql_query('SELECT COUNT(*) AS amount FROM ' . $table_prefix . 'spring_merit' . ' WHERE got_merit = ' . (int) $user);
		if (is_null($amount)) {
			return (int) $db->sql_fetchfield('amount'); # Return the amount of recommendations.
		} elseif (is_int($amount)) {
			return ($db->sql_fetchfield('amount') >= $amount) ? true : false; # Return true if $user has $amount of recommendations or more.
		}
	}

	public function posts($amount = null, $user = 'current_user') { # TODO: Cache results.
		global $db;
		if (is_string($user)) {
			$user = $this->$user;
		}
		if (!is_int($user)) {
			trigger_error('$user should be set');
		}

		$db->sql_query('SELECT user_posts FROM ' . USERS_TABLE . ' WHERE user_id = ' . (int) $user);
		if (is_null($amount)) {
			return (int) $db->sql_fetchfield('user_posts'); # Return the amount of posts.
		} elseif (is_int($amount)) {
			return ($db->sql_fetchfield('user_posts') >= $amount) ? true : false; # Return true if user has $amount of posts or more.
		}
	}

	public function active($days = null, $user = 'current_user') { # TODO: Cache results.
		global $db; # FIXME: Sql in this function is probably only compatible with MySql/MariaDB.
		if (is_string($user)) {
			$user = $this->$user;
		}
		if (!is_int($user)) {
			trigger_error('$user should be set');
		}

		$db->sql_query('SELECT DATEDIFF(CURDATE(), FROM_UNIXTIME(user_lastvisit)) as days FROM ' . USERS_TABLE . ' WHERE user_id = ' . (int) $user);
		if (is_null($days)) {
			return (int) $db->sql_fetchfield('days'); # Return the days from last login.
		} elseif (is_int($days)) {
			return ($db->sql_fetchfield('days') <= $days) ? true : false; # Return true if the account has loged on <= $days.
		}
	}

	private function check() {
		if ($this->checked) {
			return $this->result; # Returning cached result.
		} else {
			if (is_null($this->current_user)) {
				$this->errors[] = 'You\'re not loged in';
			}
			if (is_null($this->related_user)) {
				$this->errors[] = 'There\'s no user to give merit to';
			}
			if (0 == count($this->errors)) {
				$this->users_known = true;
			}

			$can_get = array();

			$this->requirements_messages[] = ($this->users_known AND $this->registration(356)) ? true : false;
			$can_get[] = end($this->requirements_messages);
			$this->requirements_messages[] = 'Your account needs to be older then a year to receive merit recommendations';

			$this->requirements_messages[] = ($this->users_known AND $this->posts(25)) ? true : false;
			$can_get[] = end($this->requirements_messages);
			$this->requirements_messages[] = 'You have to have made 25 or more posts on the forum';

			$this->requirements_messages[] = ($this->users_known AND $this->recommendations(1)) ? true : false;
			$this->requirements_messages[] = 'You need to receive your first merit recommendation (from a user with merit)';

			$this->requirements_messages[] = ($this->users_known AND $this->recommendations(2)) ? true : false;
			$this->requirements_messages[] = 'You need to receive a second merit recommendation';

			$this->requirements_messages[] = ($this->users_known AND $this->recommendations(3)) ? true : false;
			$this->requirements_messages[] = 'You need to receive a third merit recommendation to gain merit status';

			$this->requirements_messages[] = ($this->users_known AND $this->registration(356*2)) ? true : false;
			$this->requirements_messages[] = 'Your account needs to be older then two years to give merit recommendations';

			$this->requirements_messages[] = ($this->users_known AND $this->registration(356, 'related_user')) ? true : false;
			$this->requirements_messages[] = 'The other account needs to be older then a year';

			$this->requirements_messages[] = ($this->users_known AND $this->posts(25, 'related_user')) ? true : false;
			$this->requirements_messages[] = 'The other account has to have made 25 or more posts on the forum';

			$this->requirements_messages[] = ($this->users_known AND $this->active(356, 'related_user')) ? true : false;
			$this->requirements_messages[] = 'The other account has to have visited the forum in the past year';

			$this->requirements_messages[] = ($this->users_known AND !$this->gave_recommendation()) ? true : false;
			$this->requirements_messages[] = 'You  haven\'t already given the other account a recommendation';

			if (!in_array(false, $can_get)) {
				$this->can_get = true; # Only place where $this->can_get is set to true.
			}

			if (!in_array(false, $this->requirements_messages)) {
				if ($this->current_user != $this->related_user) { # Can't give yourself merit recommendations.
			    	$this->result = true; # Only place where $this->result is set to true.
				}
			}

			$this->checked = true; # Only run the checks once, better for performance.
			return $this->result;
		}
	}
}
