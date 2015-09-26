<?php

/**
 * Install a plugin remotely.
 *
 * @package WP_Plugin_Uninstall_Tester
 * @since 0.1.0
 */

$plugin_file      = $argv[1];
$config_file_path = $argv[2];
$is_multisite     = $argv[3];

require dirname( __FILE__ ) . '/bootstrap.php';

require $plugin_file;

do_action( 'activate_' . plugin_basename( $plugin_file ), false );
