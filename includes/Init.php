<?php
/**
 * The Init class initializes the Request Helper plugin
 * commonly used HTML form tags.
 *
 * @package       JPToolkit
 * @subpackage    RequestHelper
 */

namespace JPToolkit\RequestHelper;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

use JPToolkit\RequestHelper\Handlers;

/**
 * This class is required to initialize the shorthands bundled in this plugin
 *
 * @package       JPToolkit
 * @subpackage    RequestHelper
 * @author        Javier Prieto
 * @since         1.1.0
 */
class Init {

  /**
   * Constructor class
   *
   * @since         1.1.0
   */
  public function __construct() {
    // Add handlers
    add_action( 'init', [ new Handlers(), 'add_request_handlers' ] );
  }

}
