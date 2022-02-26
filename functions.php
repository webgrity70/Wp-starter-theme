<?php 

function theme_main_asstes(){

wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/font-awesome-4.7.0/css/font-awesome.min.css' );
wp_enqueue_style( 'mmenu', get_template_directory_uri().'/assets/plugin/mmenu-light-master/dist/mmenu-light.css' );
wp_enqueue_style( 'main-styleheet', get_stylesheet_uri() );
wp_enqueue_style( 'custom-styleheet', get_template_directory_uri().'/main.css' );


wp_enqueue_script( 'jquery3.5.1', get_template_directory_uri() . '/assets/js/jquery.min3.5.1.js', array(), '3.5.1', true );
wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/bootstrap4.5/js/bootstrap.bundle.min.js', array(), '', true );
wp_enqueue_script( 'mmenu-main', get_template_directory_uri() . '/assets/plugin/mmenu-light-master/dist/mmenu-light.js', array(), '', true );
wp_enqueue_script( 'mmenu-polyfill', get_template_directory_uri() . '/assets/plugin/mmenu-light-master/dist/mmenu-light.polyfills.js', array(), '', true );
wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true );

}


add_action( 'wp_enqueue_scripts', 'theme_main_asstes' );



if ( ! function_exists( 'theme_setup' ) ) :
	function theme_setup() {	

		// Add default posts and comments RSS feed links to head.

		add_theme_support( 'automatic-feed-links' );
		/*

		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */

		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */

		add_theme_support( 'post-thumbnails' );
				// This theme uses wp_nav_menu() in two locations.

		register_nav_menus(

			array(
				'menu-1' => __( 'Primary', 'hello-theme' ),
                //'mob-menu' => __( 'Mobile Menu', 'hello-theme' )
			)

		);


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		add_theme_support( 'widgets' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		// Add custom editor font sizes.	

	}

endif;

add_action( 'after_setup_theme', 'theme_setup' );


