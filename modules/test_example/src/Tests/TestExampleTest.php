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

    // Create users.
    $user_permissions = $this->createUser(array(
      'create band content',
      'delete own band content',
      'edit own band content',
      'create member content',
      'delete own member content',
      'edit own member content',
    ));
    $user_naked = $this->createUser();

    // Login user with permissions and check.
    $this->drupalLogin($user_permissions);
    $this->drupalGet('node/add/member');
    $this->assertResponse(200, 'User 1 can create member.');

    // Login user without permissions and check.
    $this->drupalLogin($user_naked);
    $this->drupalGet('node/add/member');
    $this->assertResponse(403, 'User 2 cannot create member.');
  }
}
