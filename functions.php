<?php

//remove version
function wpbeginner_remove_version() {
	return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );


/*  Include Styles & Script
/* ------------------------------------ */
if ( ! function_exists( 'legatoriacm_styles_scripts' ) ) {
	function legatoriacm_style_scripts() {
		//wp_enqueue_style;
		wp_enqueue_style( 'Montserrat','//fonts.googleapis.com/css?family=Montserrat:300,400&display=swap');
		wp_enqueue_style( 'legtoriacm-css', get_template_directory_uri().'/style.css');
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css');

		//wp_enqueue_script;
		wp_enqueue_script('jquery');

		wp_enqueue_script( 'fontawsome-js', '//kit.fontawesome.com/befb91387f.js','','',true);
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js','','',true);

	}
}
add_action( 'wp_enqueue_scripts', 'legatoriacm_style_scripts' );

/*  Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'legatoriacm_setup' ) ) {
	function legatoriacm_setup() {
		add_theme_support( "title-tag" );
		// Enable automatic feed links
		add_theme_support( 'automatic-feed-links' );
		// Enable featured image
		add_theme_support( 'post-thumbnails' );


		// Custom menu areas
		register_nav_menus( array(
			'menu-principale' => esc_html__( 'Menu principale', 'legatoriacm' ),
			'menu-social' => esc_html__( 'Menu social', 'legatoriacm' ),
			'menu-footer' => esc_html__( 'Menu footer', 'legatoriacm' ),
		) );
	}
}
add_action( 'after_setup_theme', 'legatoriacm_setup' );


/*  Register sidebars
/* ------------------------------------ */
if ( ! function_exists( 'legatoriacm_sidebars' ) ) {
	function legatoriacm_sidebars()	{
		register_sidebar(array( 'name' => esc_html__( 'Footer', 'icc' ),'id' => 'footer','description' => esc_html__( 'Area nel footer Centrale', 'legatoricm' ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
	}
}
add_action( 'widgets_init', 'legatoriacm_sidebars' );

require_once('assets/bs4navwalker.php');

?>
