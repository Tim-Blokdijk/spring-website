<?php
/**
*
* @package PhpBB Extension - Spring Merit
* @copyright (c) 2015 Tim Blokdijk
* @license http://opensource.org/licenses/MIT MIT License
*
*/

namespace spring\merit\controller;

class merit
{
	/* @var \phpbb\request\request */
	protected $request;

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\request\request		$request
	* @param \phpbb\controller\helper	$helper
	* @param \phpbb\template\template	$template
	* @param \phpbb\user				$user
	*/
	public function __construct(\phpbb\request\request $request, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->request = $request;
		$this->helper = $helper;
		$this->template = $template;
		$this->user = $user;
	}

	/**
	* Merit controller for route /merit/{user_id}
	*
	* @param string		$user_id
	* @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function handle($user_id)
	{
		global $db; # I need the username of $user_id, don't know how to do this in a clean way, sorry.
		$db->sql_query('SELECT username FROM ' . USERS_TABLE . ' WHERE user_id = ' . (int) $user_id);
		$username = $db->sql_fetchfield('username'); # FIXME: This is a hack.. fix me!

		$title = 'You want to give "' . $username . '" a merit recommendation?';

		if (!$this->request->is_set_post('submit')) { # User followed link

	        confirm_box(false, $title, build_hidden_fields(array('submit' => true)));
		}
		elseif (confirm_box(true)) { # User clicked 'Yes'
			require_once(realpath(dirname(__FILE__)) . '/../model/merit.php');
			$merit = new \spring\merit\model\merit;

			$merit->current_user($this->user->data['user_id']);
			$merit->related_user($user_id);
			$merit->save_recommendation();

			$text = 'You have confirmed the merit recommendation for ' . $username;
			$this->template->assign_vars(array(
				'TITLE' => 'Confirmed',
				'USER_ID' => $user_id,
				'TEXT'  => $text
			));
	    }
		else { # User clicked 'No'
			$text = 'You have rejected the merit recommendation for ' . $username;
			$this->template->assign_vars(array(
				'TITLE' => 'Rejected',
				'USER_ID' => $user_id,
				'TEXT'  => $text
			));
		}

		return $this->helper->render('confirm.html', $title);
	}
}
