<?php
//~ require_once 'vfsStream/vfsStream.php';
require_once(DIR_WS_INCLUDES.'external/klarna/api/transport/xmlrpc-3.0.0.beta/lib/xmlrpc.inc');
require_once(DIR_WS_INCLUDES.'external/klarna/api/transport/xmlrpc-3.0.0.beta/lib/xmlrpc_wrappers.inc');
require_once('jsonfileiterator.php');
require_once('../Klarna.php');

/**
 * Test class for Klarna.
 * Generated by PHPUnit on 2011-01-28 at 09:47:44.
 */
class digestTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Klarna
     */
    protected $object;

    public static function setUpBeforeClass() {
        date_default_timezone_set('Europe/Stockholm');
    }

    /**
    * Sets up the fixture, for example, opens a network connection.
    * This method is called before a test is executed.
    */
    protected function setUp() {
        $this->object = new Klarna();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        unset($this->object);
    }

    /**
     * @dataProvider digestProvider
     * @group digest
     * @group allPHP
     */
    public function testDigest($expected, $string, $hash) {
        $this->assertEquals($expected, Klarna::digest($string, $hash));
    }

    public function digestProvider()
    {
        return new JSONFileIterator(dirname(__FILE__).'/data/digests.json');
    }
}
