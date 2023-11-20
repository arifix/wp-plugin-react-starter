<?php

/**
 * Plugin Name:       WP React Plugin Starter
 * Description:       Test des...
 * Version:           1.0.0
 * Author:            Arif Khan
 * Text Domain:       wrps
 */

define('WRPS_PATH', trailingslashit(plugin_dir_path(__FILE__)));

require_once WRPS_PATH . 'includes/class-rest-routes.php';
require_once WRPS_PATH . 'includes/class-admin-menu.php';
require_once WRPS_PATH . 'includes/class-enqueues.php';
require_once WRPS_PATH . 'includes/class-shortcodes.php';
