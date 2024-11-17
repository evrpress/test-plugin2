<?php

namespace EverPress;



/**
 * Plugin Name:       Test Plugin2
 * Description:       This is a simple Test plugin for...testing
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Version:           0.1.3
 * Author:            Xaver
 * License:           GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once __DIR__ . '/vendor/autoload.php';



// Initialize the updater
\EverPress\WPUpdater::add('test-plugin2/test-plugin2.php',
	array(
		'username'        => 'evrpress',
		'repository'      => 'test-plugin2',
		'current_version' => '0.1.0',
		'plugin_slug'     => 'test-plugin2/test-plugin2.php',
	)
);
