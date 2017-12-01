<?php
/*
Plugin Name: Enable SVGs
Plugin URI:
Description: Allows SVGs in the WordPress Media Library and fixes display of SVGs in the WordPress Admin
Version: 1.0
Author: Michael W. Delaney
Author URI:
License: MIT
*/

namespace MWD\EnableSVG;
/**
 * Set up autoloader
 */
require __DIR__ . '/vendor/autoload.php';

/**
 * Define constants
 */
define( 'ENABLESVG_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'ENABLESVG_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Require classes
 */
$enablesvg_init = new \MWD\EnableSVG\Init();