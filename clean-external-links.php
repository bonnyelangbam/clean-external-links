<?php
/*
Plugin Name: Clean External Links
Description: Adds target="_blank" and rel="nofollow noreferrer" to all external links with domain whitelisting.
Version: 1.0
Author: Bonny Elangbam
Author URI: https://profile.wordpress.org/bonnyelangbam
Plugin URI: https://bonnyelangbam.com/clean-external-links
*/

if (!defined('ABSPATH')) {
	exit;
}

// Settings
require_once plugin_dir_path(__FILE__) . 'includes/admin-settings.php';

// Enqueue front-end JS
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_script(
		'clean-external-links',
		plugins_url('assets/js/clean-external-links.js', __FILE__),
		array(),
		'1.0',
		true
	);
	$whitelist = get_option('cel_whitelist', '');
	$domains = array_filter(array_map('trim', explode("\n", $whitelist)));
	wp_localize_script('clean-external-links', 'CEL_WHITELIST', $domains);
});
