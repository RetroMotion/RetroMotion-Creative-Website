<?php

function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_stylesheet_directory_uri() . '/js/smoothscroll.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

add_filter("gform_confirmation_anchor", create_function("","return true;"));



function zilla_theme_setup () {

	/* Load translation domain --------------------------------------------------*/
	load_theme_textdomain( 'zilla', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	/* Register WP 3.0+ Menus ---------------------------------------------------*/
	register_nav_menu( 'primary-menu', __('Primary Menu', 'zilla') );
	register_nav_menu( 'footer-menu', __('Footer Menu', 'zilla') );

	/* Configure WP 2.9+ Thumbnails ---------------------------------------------*/
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails
	add_image_size( 'blog-index', 800, '', true); // blog index/single pages
	add_image_size( 'portfolio-full', 940, '', true); // portfolio full width
	add_image_size( 'portfolio-index', 600, '', true); // portfolio index/single pages
	add_image_size( 'portfolio-thumb', 188, 144, true); // portfolio thumbnails
	add_image_size( 'portfolio-admin-thumb', 35, 35, true ); // Used in the portfolio edit page

	/* Add support for post formats ---------------------------------------------*/
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'gallery',
			'image',
			'link',
			'quote',
			'video',
			'audio'
		)
	);

	add_theme_support( 'automatic-feed-links' );

}

/* jQuery ------*/
function my_init() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '2.2.4', true);
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_init');
