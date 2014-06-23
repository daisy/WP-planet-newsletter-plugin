<?php

/*
Plugin Name: Daisy Newsletters
Plugin URI: http://www.daisy.org/newsletter/
Description: Used by millions to make WP better.
Author: Bradford Knowton
Version: 1.16
Author URI: http://bradknowlton.com/
License: GPLv2 or later

*/

class WPPlanetNewsletterPlugin {

	/*--------------------------------------------*
	 * Constants
	 *--------------------------------------------*/
	const name = 'WP Planet Newsletter Plugin';
	const slug = 'wp_planet_newsletter_plugin';

	/**
	 * Constructor
	 */
	function __construct() {
		//Hook up to the init action
		add_action( 'init', array( &$this, 'init_wp_planet_newsletter_plugin' ) );
	}

	/**
	 * Runs when the plugin is initialized
	 */
	function init_wp_planet_newsletter_plugin() {
		// Load JavaScript and stylesheets
		$this->register_scripts_and_styles();


		if ( is_admin() ) {
			//this will run when in the WordPress admin
		} else {
			//this will run when on the frontend
		}

		$labels = array(
			'name' => _x( 'DAISY Newsletters', 'daisy_newsletter' ),
			'singular_name' => _x( 'DAISY Newsletter', 'daisy_newsletter' ),
			'add_new' => _x( 'Add New', 'daisy_newsletter' ),
			'add_new_item' => _x( 'Add New DAISY Newsletter', 'daisy_newsletter' ),
			'edit_item' => _x( 'Edit DAISY Newsletter', 'daisy_newsletter' ),
			'new_item' => _x( 'New DAISY Newsletter', 'daisy_newsletter' ),
			'view_item' => _x( 'View DAISY Newsletter', 'daisy_newsletter' ),
			'search_items' => _x( 'Search DAISY Newsletters', 'daisy_newsletter' ),
			'not_found' => _x( 'No daisy newsletters found', 'daisy_newsletter' ),
			'not_found_in_trash' => _x( 'No daisy newsletters found in Trash', 'daisy_newsletter' ),
			'parent_item_colon' => _x( 'Parent DAISY Newsletter:', 'daisy_newsletter' ),
			'menu_name' => _x( 'DAISY Newsletters', 'daisy_newsletter' ),
		);
		$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'supports' => array( 'title', 'author', 'revisions' ), // 'editor',  'custom-fields',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post'
		);
		register_post_type( 'daisy_newsletter', $args );

	}


	/**
	 * Registers and enqueues stylesheets for the administration panel and the
	 * public facing site.
	 */
	private function register_scripts_and_styles() {
		if ( is_admin() ) {

		} else {

		} // end if/else
	} // end register_scripts_and_styles

} // end class

new WPPlanetNewsletterPlugin();