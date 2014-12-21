<?php
App::uses('Nomplanet', 'Model');

/**
 * Nomplanet Test Case
 *
 */
class NomplanetTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nomplanet'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Nomplanet = ClassRegistry::init('Nomplanet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nomplanet);

		parent::tearDown();
	}

}
