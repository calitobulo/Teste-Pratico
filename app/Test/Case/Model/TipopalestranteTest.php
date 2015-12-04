<?php
App::uses('Tipopalestrante', 'Model');

/**
 * Tipopalestrante Test Case
 *
 */
class TipopalestranteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipopalestrante'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tipopalestrante = ClassRegistry::init('Tipopalestrante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipopalestrante);

		parent::tearDown();
	}

}
