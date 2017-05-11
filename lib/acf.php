<?php
	
	/*
		Advanced Custom Fields
	*/


	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' => 'Site Settings',
			'menu_title' => 'Site Settings',
			'menu_slug' => 'site-settings',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Layout Colors',
			'menu_title' => 'Layout Colors',
			'menu_slug' => 'site-settings-layout-colors',
			'capability' => 'edit_posts',
			'parent_slug' => 'site-settings',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Location Information',
			'menu_title' => 'Location Information',
			'menu_slug' => 'site-settings-location-information',
			'capability' => 'edit_posts',
			'parent_slug' => 'site-settings',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Featured Resoruces',
			'menu_title' => 'Featured Resources',
			'menu_slug' => 'site-settings-featured-esources',
			'capability' => 'edit_posts',
			'parent_slug' => 'site-settings',
			'position' => false,
			'icon_url' => false
		));
	
	}

?>