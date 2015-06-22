<?php
App::uses('Human', 'Model');

/**
 * Human Test Case
 *
 */
class HumanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.human',
		'app.division',
		'app.member'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Human = ClassRegistry::init('Human');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Human);

		parent::tearDown();
	}

}
