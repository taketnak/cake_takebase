<?php
/**
 * HumanFixture
 *
 */
class HumanFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'division_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'age' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'is_manager' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'member_from' => array('type' => 'date', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'division_id' => 1,
			'age' => 1,
			'is_manager' => 1,
			'member_from' => '2015-06-22',
			'created' => '2015-06-22 11:48:52',
			'modified' => '2015-06-22 11:48:52'
		),
	);

}
