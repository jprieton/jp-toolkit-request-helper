<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace JPToolkit\RequestHelper;

/**
 * Description of Handlers
 *
 * @author javier
 */
class Handlers
{

  /**
   * Load handlers
   *
   * @return void
   */
  public function add_request_handlers()
  {
    // Add email handler
    add_filter('jp_toolkit_request_helper_handler_email', [$this, 'email_handler']);
    // Add integer handler
    add_filter('jp_toolkit_request_helper_handler_integer', [$this, 'integer_handler']);
    // Add URL handler
    add_filter('jp_toolkit_request_helper_handler_url', [$this, 'url_handler']);
  }

  /**
   *
   * @return array
   */
  public function email_handler()
  {
    $args = [
      'filter'   => FILTER_SANITIZE_EMAIL,
      'callback' => [
        'sanitize_text_field',
        'trim',
        'strtolower'
      ]
    ];

    return $args;
  }

  /**
   *
   * @return array
   */
  public function integer_handler()
  {
    $args = [
      'callback' => [
        'sanitize_text_field',
        'trim',
        'intval'
      ]
    ];

    return $args;
  }

  /**
   *
   * @return array
   */
  public function url_handler()
  {
    $args = [
      'filter'   => FILTER_SANITIZE_URL,
      'callback' => [
        'sanitize_text_field',
        'trim',
      ]
    ];

    return $args;
  }
}
