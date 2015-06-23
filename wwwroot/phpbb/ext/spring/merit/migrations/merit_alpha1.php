<?php
/**
*
* @package PhpBB Extension - Spring Merit
* @copyright (c) 2015 Tim Blokdijk
* @license http://opensource.org/licenses/MIT MIT License
*
*/

namespace spring\merit\migrations;

class merit_alpha1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\gold');
	}

	public function update_schema()
	{
		return array(
			'add_tables' => array(
				$this->table_prefix . 'spring_merit' => array(
					'COLUMNS' => array(
						'merit_id'   => array('UINT', null, 'auto_increment'),
						'gave_merit' => array('UINT', null),
						'got_merit'  => array('UINT', null),
						'time'       => array('TIMESTAMP', 0),
					),
					'PRIMARY_KEY' => 'merit_id',
				),
			),
			'add_columns' => array(
				$this->table_prefix . 'users' => array(
					'user_spring_merit'      => array('BOOL', 0),
					'user_spring_merit_time' => array('TIMESTAMP', null),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns' => array(
				$this->table_prefix . 'users' => array(
					'user_spring_merit',
					'user_spring_merit_time',
				),
			),
			'drop_tables' => array(
				$this->table_prefix . 'spring_merit',
			),
		);
	}
}
