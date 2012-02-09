<?php
/**
 * Test class for Loader.
 *
 * Main problem with testing this class is all the overriding being done outside the core files.
 * Increasing test coverage would mean creating override files in the different folders that accept these.
 *
 * Generated by PHPUnit on 2012-02-09 at 12:14:02.
 * @author Chris van Dam <chris@trace.nl>
 *
 */
class LoaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Loader
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Loader;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Loader::library
     */
    public function testLibrary()
    {
        Loader::library('cache');
        $this->assertTrue(class_exists('CacheLocal'));
        $this->assertTrue(class_exists('Cache'));

    }

    /**
     * @covers Loader::model
     */
    public function testModel()
    {
        Loader::model('pile');
        $this->assertTrue(class_exists('Pile'));

    }

    /**
     * @covers Loader::packageElement
     * @todo Implement testPackageElement().
     */
    public function testPackageElement()
    {

        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Loader::element
     * @todo Implement testElement().
     */
    public function testElement()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Loader::tool
     * @todo Implement testTool().
     */
    public function testTool()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Loader::block
     * @todo Implement testBlock().
     */
    public function testBlock()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Loader::database
     * @todo Implement testDatabase().
     */
    public function testDatabase()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Loader::db
     * @todo Implement testDb().
     */
    public function testDb()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Loader::helper
     * @todo Implement testHelper().
     */
    public function testHelper()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Loader::package
     * @todo Implement testPackage().
     */
    public function testPackage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Loader::startingPointPackage
     * @todo Implement testStartingPointPackage().
     */
    public function testStartingPointPackage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Loader::pageTypeControllerPath
     * @todo Implement testPageTypeControllerPath().
     */
    public function testPageTypeControllerPath()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Loader::controller
     * @todo Implement testController().
     */
    public function testController()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
?>
