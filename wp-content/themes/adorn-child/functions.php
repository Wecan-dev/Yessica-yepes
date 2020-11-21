<?php

/*** Child Theme Function  ***/
if ( ! function_exists( 'adorn_edge_child_theme_enqueue_scripts' ) ) {
	function adorn_edge_child_theme_enqueue_scripts()
	{
		$parent_style = 'adorn-edge-default-style';

		wp_enqueue_style('adorn-edge-child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
	}

	add_action('wp_enqueue_scripts', 'adorn_edge_child_theme_enqueue_scripts');
}


add_theme_support('category-thumbnails');

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );

remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );
