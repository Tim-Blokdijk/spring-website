<?php
/**
*
* @package PhpBB Extension - Spring Merit
* @copyright (c) 2015 Tim Blokdijk
* @license http://opensource.org/licenses/MIT MIT License
*
*/

namespace spring\merit\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class subscriber implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.viewtopic_cache_user_data'  => 'load_merit_on_view_topic',
			'core.viewtopic_cache_guest_data' => 'load_merit_on_view_topic',
			'core.viewtopic_modify_post_row'  => 'add_merit_on_view_topic',
			'core.memberlist_view_profile'    => 'load_merit_on_view_profile'
		);
	}

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\controller\helper	$helper		Controller helper object
	* @param \phpbb\template			$template	Template object
	* @param \phpbb\user				$user		User object
	*/
	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->helper   = $helper;
		$this->template = $template;
		$this->user     = $user;
	}

	public function load_merit_on_view_profile($event)
	{
		if($this->user->data['user_id'] != ANONYMOUS) { # If the user is logged in.
			require_once(realpath(dirname(__FILE__)) . '/../model/merit.php');
			$merit = new \spring\merit\model\merit;
			$merit->current_user($this->user->data['user_id']);
			$merit->related_user($event['member']['user_id']);

			$requirements = '';
			foreach ($merit->requirements_messages() as $value) {
				if ($value === true) {
					$requirements .= '<span style="color:#0C0">✔</span> ';
				} elseif ($value === false) {
					$requirements .= '<span>✘</span> ';
				} else {
					$requirements .= $value;
					$requirements .= "<br>";
				}
			}

			$merit_string = '';
			if ($merit->gave_recommendation()) {
					$merit_string = 'You gave a merit recommendation for this account.';
			} elseif ($merit->can_give()) {
				$merit_string = 'I would like to recommend this user for merit';
			} elseif ($merit->current_user != $merit->related_user) {
				$merit_string = 'You currently don\'t meet the requirements to give merit recommendations.';
			} elseif ($merit->current_user == $merit->related_user) {
				if (!$merit->can_get()) {
					$merit_string = 'You currently don\'t meet the requirements to receive merit recommendations.';
				} elseif (0 == $merit->recommendations()) {
					$merit_string = 'You currently don\'t have any recommendations.. you\'re still a ❤ person.';
				} elseif (1 == $merit->recommendations()) {
					$merit_string = 'You have your first recommendation! That\'s ⅓ towards the full merit status.';
				} elseif (2 == $merit->recommendations()) {
					$merit_string = 'You have a second recommendation! That\'s ⅔ towards the full merit status.';
				} elseif (3 == $merit->recommendations()) {
					$merit_string = 'Three independend people with merit status have recommended you. You now have merit status.';
				} elseif (4 <= $merit->recommendations()) {
					$merit_string = 'You managed to get ' . $merit->recommendations() . ' independent people with merit status to recommend you. You\'re on a roll.<div id="dice"><span class="roll">⚀</span><span class="roll">⚁</span><span class="roll">⚂</span><span class="roll">⚃</span><span class="roll">⚄</span><span class="roll">⚅</span></div>';
				}
			}

			$this->template->assign_vars(array(
				'MERIT'              => $event['member']['user_spring_merit'] == 1 ? 'Yes' : 'No',
				'CAN_GIVE_MERIT'     => $merit->can_give(),
				'GIVE_MERIT_LINK'    => $this->helper->route('spring_merit_controller', array('user_id' => $event['member']['user_id'])),
				'MERIT_STRING'       => $merit_string,
				'MERIT_REQUIREMENTS' => $requirements
			));
		} else { # If the user is logged out, FIXME: Not tested..
			$this->template->assign_vars(array(
				'MERIT'              => $event['member']['user_spring_merit'] == 1 ? 'Yes' : 'No',
				'CAN_GIVE_MERIT'     => false,
				'MERIT_REQUIREMENTS' => '<span style="color:#800080">*</span> Please login for merit requirements.'
			));
		}
	}

	public function load_merit_on_view_topic($event)
	{
		$array = $event['user_cache_data'];
		$merit = $event['row']['user_spring_merit'];
		$array['merit'] = $merit;
		$event['user_cache_data'] = $array;
	}

	public function add_merit_on_view_topic($event)
	{
		$event['post_row'] = array_merge($event['post_row'], array('MERIT' => $event['user_poster_data']['merit']));
	}
}
