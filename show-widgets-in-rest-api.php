<?php
/**
 * Main plugin file.
 *
 * @package   Spacedmonkey\REST_API_Widgets
 * @copyright 2021 Jonathan Harris
 * @license   https://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link      https://www.github.com/spacedmonkey/show-widgets-in-rest-api
 *
 * Plugin Name: Show widgets in REST API
 * Description:  Show widgets in REST API.
 * Plugin URI: https://www.github.com/spacedmonkey/show-widgets-in-rest-api
 * Author: Jonathan Harris
 * Author URI: https://www.spacedmonkey.com/
 * Version: 1.0.0
 * Requires at least: 5.9
 * Requires PHP: 5.6
 * Text Domain: rest-api-widgets
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 */

namespace Spacedmonkey\REST_API_Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * @since 1.0.0
 *
 * @param array $sidebar Parsed arguments for the registered sidebar.
 *
 * @returns void
 */
function register_sidebar( $sidebar ) {
	global $wp_registered_sidebars;

	if ( 'wp_inactive_widgets' === $sidebar['id'] ) {
		return;
	}

	$sidebar['show_in_rest']                  = true;
	$wp_registered_sidebars[ $sidebar['id'] ] = $sidebar;
}
add_action( 'register_sidebar', __NAMESPACE__ . '\register_sidebar' );
