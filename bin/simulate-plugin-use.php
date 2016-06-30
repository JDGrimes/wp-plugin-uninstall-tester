<?php

/**
 * Simulate plugin usage.
 *
 * @package WP_Plugin_Uninstall_Tester
 * @since 0.1.0
 */

/**
 * Load the WordPress tests functions.
 *
 * We are loading this so that we can add our tests filter to load the plugin, using
 * tests_add_filter().
 *
 * @since 0.1.0
 */
require_once getenv( 'WP_TESTS_DIR' ) . '/includes/functions.php';

$plugin_file      = $argv[1];
$simulation_file  = $argv[2];
$config_file_path = $argv[3];
$is_multisite     = $argv[4];
$network_active   = $argv[5];

require dirname( __FILE__ ) . '/bootstrap.php';

/**
 * Load the WP unit test factories.
 *
 * Use the $wp_test_factory global to create users, posts, etc., the same way that
 * you use the $factory propety in WP unit test case classes.
 *
 * @since 0.2.0
 */
require_once getenv( 'WP_TESTS_DIR' ) . '/includes/factory.php';

$GLOBALS['wp_test_factory'] = new WP_UnitTest_Factory;

require $simulation_file;

deactivate_plugins( $plugin_file, false, $network_active );
