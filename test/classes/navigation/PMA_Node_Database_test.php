<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Ttests for Node_Database class
 *
 * @package PhpMyAdmin-test
 */

require_once 'libraries/navigation/NodeFactory.class.php';
require_once 'libraries/Util.class.php';
require_once 'libraries/Theme.class.php';

/**
 * Tests for Node_Database class
 *
 * @package PhpMyAdmin-test
 */
class Node_Database_Test extends PHPUnit_Framework_TestCase
{
    /**
     * SetUp for test cases
     * 
     * @return void
     */
    public function setup()
    {
        $GLOBALS['server'] = 0;
        $GLOBALS['token'] = 'token';
        $_SESSION['PMA_Theme'] = PMA_Theme::load('./themes/pmahomme');
    }

    /**
     * Test for __construct
     * 
     * @return void
     */
    public function testConstructor()
    {
        $parent = PMA_NodeFactory::getInstance('Node_Database');
        $this->assertArrayHasKey(
            'text',
            $parent->links
        );
        $this->assertContains(
            'db_structure.php',
            $parent->links['text']
        );
    }
}
?>
