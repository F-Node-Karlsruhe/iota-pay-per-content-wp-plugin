<?php
/**
 * Plugin Name: Iota Pay per Content
 * Plugin URL: https://pay-per-content.com
 * Description: Links your wordpress site to pay-per-content.com
 * Version: 0.1
 * Author: pay-per-content.com
 * Author URI: https://pay-per-content.com
 * Tags: Pay per content, IOTA
 */


/*******************************************
* global variables
*******************************************/


if ( ! defined( 'IPPC_PLUGIN_VERSION' ) ) {
	define( 'IPPC_PLUGIN_VERSION', '0.1' );
}

if ( ! defined( 'IPPC_PLUGIN_DIR' ) ) {
	define( 'IPPC_PLUGIN_DIR', dirname(__FILE__) );
}

if ( ! defined( 'IPPC_PLUGIN_URL' ) ) {
	define( 'IPPC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}




/*******************************************
* file includes
*******************************************/
require_once  RC_PLUGIN_DIR . '/includes/misc-functions.php';
require_once  RC_PLUGIN_DIR . '/includes/forms.php';
require_once  RC_PLUGIN_DIR . '/includes/scripts.php';
require_once  RC_PLUGIN_DIR . '/includes/upgrades.php';
require_once  RC_PLUGIN_DIR . '/includes/integrations.php';
include(RC_PLUGIN_DIR . '/includes/settings.php');
include(RC_PLUGIN_DIR . '/includes/shortcodes.php');
include(RC_PLUGIN_DIR . '/includes/metabox.php');
include(RC_PLUGIN_DIR . '/includes/display-functions.php');
include(RC_PLUGIN_DIR . '/includes/feed-functions.php');
include(RC_PLUGIN_DIR . '/includes/user-checks.php');

/**
 * Deactivates the plugin if Restrict Content Pro is activated.
 *
 * @since 2.2.1
 */
function rc_deactivate_plugin() {
	if ( defined( 'IPPC_PLUGIN_VERSION' ) ) {
		deactivate_plugins( plugin_basename( __FILE__ ) );
	}
}
add_action( 'admin_init', 'ippc_deactivate_plugin' );