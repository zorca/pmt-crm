<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://zorca.org
 * @since             1.0.0
 * @package           Pmt_Crm
 *
 * @wordpress-plugin
 * Plugin Name:       PMT CRM
 * Plugin URI:        https://github.com/zorca/pmt-crm
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Zorca Orcinus
 * Author URI:        https://zorca.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pmt-crm
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PMT_CRM_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pmt-crm-activator.php
 */
function activate_pmt_crm() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pmt-crm-activator.php';
	Pmt_Crm_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pmt-crm-deactivator.php
 */
function deactivate_pmt_crm() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pmt-crm-deactivator.php';
	Pmt_Crm_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pmt_crm' );
register_deactivation_hook( __FILE__, 'deactivate_pmt_crm' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pmt-crm.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pmt_crm() {

	$plugin = new Pmt_Crm();
	$plugin->run();

}
run_pmt_crm();
