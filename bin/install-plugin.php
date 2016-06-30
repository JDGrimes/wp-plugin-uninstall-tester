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
$network_active   = $argv[4];

require dirname( __FILE__ ) . '/bootstrap.php';

require_once ABSPATH . '/wp-admin/includes/plugin.php';

activate_plugin( $plugin_file, '', $network_active );
