<?php
/**
 * Plugin Name: Cuttlesoft Headless (Blocks)
 * Plugin URI: https://github.com/cuttlesoft/wds-headless-blocks
 * Description: Headless extension handling Gutenberg block functionality.
 * Author: Cuttlesoft <engineering@cuttlesoft.com>
 * Author URI: https://cuttlesoft.com
 * Version: 1.0.1
 * Requires at least: 5.6
 * Requires PHP: 7.4
 * License: GPL-2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: cuttlesoft/wds-headless-blocks
 * Release Asset: true
 *
 * @package WDS_Headless_Blocks
 */

namespace WDS_Headless_Blocks;

if ( ! defined( 'ABSPATH' ) ) {
	return;
}

// Define constants.
define( 'WDS_HEADLESS_BLOCKS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WDS_HEADLESS_BLOCKS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WDS_HEADLESS_BLOCKS_VERSION', '1.0.1' );

// Register de/activation hooks.
register_activation_hook( __FILE__, __NAMESPACE__ . '\activation_callback' );
register_deactivation_hook( __FILE__, __NAMESPACE__ . '\deactivation_callback' );

require_once 'inc/block-manager.php';
require_once 'inc/blocks.php';
