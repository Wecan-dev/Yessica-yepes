<?php

if(!function_exists('adorn_edge_admin_map_init')) {
	function adorn_edge_admin_map_init() {
		do_action('adorn_edge_before_options_map');
		
		require_once EDGE_FRAMEWORK_ROOT_DIR.'/admin/options/fonts/map.php';
		require_once EDGE_FRAMEWORK_ROOT_DIR.'/admin/options/general/map.php';
		require_once EDGE_FRAMEWORK_ROOT_DIR.'/admin/options/page/map.php';
		require_once EDGE_FRAMEWORK_ROOT_DIR.'/admin/options/social/map.php';
		require_once EDGE_FRAMEWORK_ROOT_DIR.'/admin/options/reset/map.php';
		require_once EDGE_FRAMEWORK_ROOT_DIR.'/admin/options/logo/map.php';
		require_once EDGE_FRAMEWORK_ROOT_DIR.'/admin/options/content-bottom/map.php';

		do_action('adorn_edge_options_map');
		
		do_action('adorn_edge_after_options_map');
	}
	
	add_action('after_setup_theme', 'adorn_edge_admin_map_init', 0);
}