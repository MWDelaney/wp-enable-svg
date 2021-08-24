<?php
namespace MWD\EnableSVG;

class Init {
  /**
   * Run filters and actions
   */
  function __construct() {

    // Add svg to allowed mime types
    add_filter('upload_mimes', function($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    });
  }
}
