<?php

require_once dirname(__FILE__) . '/../../../web/concrete/libraries/request.php';

/**
 * Test class for Request.
 * Generated by PHPUnit on 2011-07-07 at 22:30:33.
 */
class RequestTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var Request
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		
	}

	public static function  setUpBeforeClass() {
		//clear the _SERVER variables so there are no weird bugs when testing
		unset($_SERVER['ORIG_PATH_INFO']);
		unset($_SERVER['PATH_INFO']);
		unset($_SERVER['SCRIPT_NAME']);
		unset($_SERVER['REDIRECT_URL']);
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {

	}

	public function testParse() {
		//we create new objects in order to test the private parse() method

		//testing blocks, both with and without the .php extension, with and without dots in the filename
		$files = array();
		$files[] = 'subdir/file';
		$files[] = 'subdir/file.php';
		$files[] = 'file';
		$files[] = 'file.php';
		$files[] = 'a.file.with.dots';
		$files[] = 'a.file.with.dots.php';
		$files[] = 'subdir/a.file.with.dots';
		$files[] = 'subdir/a.file.with.dots.php';
		foreach ($files as $file) {
		
			$block = new Request('tools/blocks/block_handle/' . $file);
			$this->assertEquals('BLOCK_TOOL', $block->getIncludeType());
			$this->assertEquals('block_handle', $block->getBlock());
			$this->assertEquals($file . (substr($file, -3) == 'php' ? '' : '.php'), $block->getFilename());
			
			$package = new Request('tools/packages/package_handle/' . $file);
			$this->assertEquals('PACKAGE_TOOL', $package->getIncludeType());
			$this->assertEquals('package_handle', $package->getPackageHandle());
			$this->assertEquals($file . (substr($file, -3) == 'php' ? '' : '.php'), $package->getFilename());
			
			$core = new Request('tools/required/' . $file);
			$this->assertEquals('CONCRETE_TOOL', $core->getIncludeType());
			$this->assertEquals($file . (substr($file, -3) == 'php' ? '' : '.php'), $core->getFilename());

			$tool = new Request('tools/' . $file);
			$this->assertEquals('TOOL', $tool->getIncludeType());
			$this->assertEquals($file . (substr($file, -3) == 'php' ? '' : '.php'), $tool->getFilename());

		}
		
	}

	public function testParsePathFromRequest() {
		//this requires a bleeding edge version of request.php (2011-07-08) that allows us to test different paths

		//key is path, expected return request path is the value
		$testPaths = array('/' => '',
							DISPATCHER_FILENAME => '',
							DISPATCHER_FILENAME . '/post' => 'post',
							DISPATCHER_FILENAME . '/blog/post' => 'blog/post'
						);

		foreach ($testPaths as $path => $file) {
			$_SERVER['ORIG_PATH_INFO'] = DIR_REL . '/' . $path;

			$req = Request::get();
			$this->assertEquals($file, $req->getRequestPath());
		}

		
	}

	/**
	 * @todo Implement testGet().
	 */
	public function testGet() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestedPage().
	 */
	public function testGetRequestedPage() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestPath().
	 */
	public function testGetRequestPath() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestCollectionPath().
	 */
	public function testGetRequestCollectionPath() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestCollectionID().
	 */
	public function testGetRequestCollectionID() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestTask().
	 */
	public function testGetRequestTask() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestTaskParameters().
	 */
	public function testGetRequestTaskParameters() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsIncludeRequest().
	 */
	public function testIsIncludeRequest() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetIncludeType().
	 */
	public function testGetIncludeType() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetFilename().
	 */
	public function testGetFilename() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetBlock().
	 */
	public function testGetBlock() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetAuxiliaryData().
	 */
	public function testGetAuxiliaryData() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetPackageHandle().
	 */
	public function testGetPackageHandle() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testSetRequestTask().
	 */
	public function testSetRequestTask() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testSetCurrentPage().
	 */
	public function testSetCurrentPage() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetCurrentPage().
	 */
	public function testGetCurrentPage() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testSetRequestTaskParameters().
	 */
	public function testSetRequestTaskParameters() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testSetCollectionPath().
	 */
	public function testSetCollectionPath() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

}

?>
