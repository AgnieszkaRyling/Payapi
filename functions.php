<?php 

function payapi_setup(){
  add_theme_support('title-tag');
  load_theme_textdomain('payapi', get_template_directory() . '/languages');

  //register menu
  register_nav_menus(array(
      'primary-menu' => __('Primary Menu','payapi')
  ));
}

add_action('after_setup_theme','payapi_setup');


function payapi_assets(){
  wp_enqueue_style( 'my', get_template_directory_uri().'/assets/css/my.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/8601036ebb.js', array(), null );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );

  wp_enqueue_style( 'style-theme', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts','payapi_assets');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> ' General Settings','payapi',
		'menu_title'	=> 'Payapi Settings','payapi',
		'menu_slug' 	=> 'payapi-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> 'CTA Settings','payapi',
		'menu_title'	=> 'CTA','payapi',
		'parent_slug'	=> 'payapi-general-settings',
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings','payapi',
		'menu_title'	=> 'Footer','payapi',
		'parent_slug'	=> 'payapi-general-settings',
	));
}

function wporg_custom_post_type() {
	register_post_type('plans',
		array(
			'labels'      => array(
				'name'          => __( 'plans', 'textdomain' ),
				'singular_name' => __( 'plan', 'textdomain' ),
			),
			'public'      => true,
			'has_archive' => true,
			'rewrite'     => array( 'slug' => 'plans' ), // my custom slug
		)
	);
}
add_action('init', 'wporg_custom_post_type');

?>