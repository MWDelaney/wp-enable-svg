<?php
namespace MWD\EnableSVG;
/**
 * Main Complex Titles class
 */
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

    // Show svg properly in media grid and Feature Images
    add_action('admin_head', function() {
      $css = '';
      $css = 'td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { width: 100% !important; height: auto !important; }';
      echo '<style type="text/css">'.$css.'</style>'; 
    });

  }
}