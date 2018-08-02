<?php
/**
 * Plugin Name: Fallback Themes Loader
 * Description: Load the default theme directory from the wp package (avoid having no themes) 
 * Version: 1.0.0
 * Author: Constantine Kiriaze
 * Author URI: https://kiriaze.com/
 * License: MIT License
 */
// WEBROOT_DIR is defined in wp-config.php
register_theme_directory( WEBROOT_DIR . '/wordpress/wp-content/themes' );