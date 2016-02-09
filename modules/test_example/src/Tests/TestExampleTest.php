<?php
/**
 * @file
 * Contains \Drupal\test_example\Tests.
 */

namespace Drupal\test_example\Tests;

use Drupal\simpletest\WebTestBase;
use Drupal\simpletest\TestBase;


/**
 * Example test.
 *
 * @group test_example
 */
class TestExampleTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('test_example');

  

  /**
   *  User can create, edit and delete band and members nodes.
   */
  function testContentPermissions() {


    // Create band member.
//    $node = \Drupal\node\Entity\Node::create(array('type' => 'members', 'title' => 'Eminem'));
  }
}
