<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => '50'),
		'codigo' => array('type' => 'string', 'null' => true, 'length' => '50'),
		'email' => array('type' => 'string', 'null' => true, 'length' => '50'),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'created_by' => array('type' => 'integer', 'null' => true, 'length' => '4'),
		'modified_by' => array('type' => 'integer', 'null' => true, 'length' => '4'),
		'indexes' => array(
			'0' => array()
		),
		'tableParameters' => array()
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
			'codigo' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-05-21 20:39:28',
			'modified' => '2013-05-21 20:39:28',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
