<?php
/**
 * @file
 * Contains \Drupal\test_example\Tests.
 */

namespace Drupal\test_example\Tests;

use Drupal\simpletest\WebTestBase;
use \Drupal\node\Entity\Node;


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
   * The installation profile to use with this test.
   *
   * @var string
   */
  protected $profile = 'standard';

  /**
   *  User can create, edit and delete band and members nodes.
   */
  function testContentPermissions() {

    // Create User.
    $user = $this->createUser(array('create simpletest_example content'));

    // Create band member.
    $node = \Drupal\node\Entity\Node::create(array('type' => 'members', 'title' => 'Eminem'));
    debug($node->nid);
  }
}
