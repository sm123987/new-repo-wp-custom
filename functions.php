<?php
register_sidebar(array(
	'name' => __('First Right Sidebar'),
	'id' => 'first-right-sidebar',
	'description' => 'The widget position in the top right sidebar',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));

register_sidebar(array(
	'name' => __('Second Right Sidebar'),
	'id' => 'second-right-sidebar',
	'description' => 'The widget position in the bottom right sidebar',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));

register_sidebar(array(
	'name' => __('Header Right'),
	'id' => 'header-right',
	'description' => 'The widget position in the header right',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));

add_action('init', 'prowp_register_my_post_types');

function prowp_register_my_post_types() {
	register_post_type(
		'products',
		array(
			'labels' => array('name' => 'Products'),
			'public' => true,
			'hierarchical' => true,
			)
		);
}

add_action('init', 'prowp_define_product_type_taxonomy');

function prowp_define_product_type_taxonomy() {
	register_taxonomy(
		'type',
		'products',
		array(
			'hierarchical' => true,
			'labels' => 'Type',
			'query_var' => true,
			'rewrite' => true,
			)
		);
}
