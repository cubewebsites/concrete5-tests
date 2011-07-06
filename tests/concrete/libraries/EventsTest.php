<?php

require_once dirname(__FILE__) . '/../../../web/concrete/libraries/events.php';

/**
 * Test class for Events.
 * Generated by PHPUnit on 2011-07-04 at 11:18:37.
 */
class EventsTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var Events
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new Events;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {

	}

	/**
	 * @todo Implement testEnableEvents().
	 */
	public function testEnableEvents() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetInstance().
	 */
	public function testGetInstance() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testExtendPageType().
	 */
	public function testExtendPageType() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testExtend().
	 */
	public function testExtend() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testFire().
	 */
	public function testFire() {
		$observer = new EventsTestObserver();

		$this->object->extend('fire', $observer, 'invoke', null);
		$this->object->fire('dontfire', array('a' => 1, 'b' => 2));
		$this->assertEquals(0, $observer->invoked);

		$this->object->fire('fire', array('a' => 18, 'b' => 81));
		$this->assertEquals(1, $observer->invoked);
		$this->assertEquals(81, $observer->lastArgs['b']);
		
	}

}

class EventsTestObserver {
	public $invoked = 0;
	public $lastArgs = array();

	public function invoke($args) {
		$this->invoked++;
		$this->lastArgs = $args;
	}

	public function reset() {
		$this->invoked = 0;
		$this->lastArgs = array();
	}
}

?>
