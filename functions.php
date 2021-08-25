<?php

/**
 * Registrando alguns suportes e menu
 */
add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	global $content_width;
	if (!isset($content_width)) {
		$content_width = 1920;
	}
	register_nav_menus(array('main-menu' => esc_html__('Menu Principal', 'blankslate')));
}

/**
 * Adicionando pingback no header
 */
add_action('wp_head', 'blankslate_pingback_header');
function blankslate_pingback_header(){
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s" />' . "\n", esc_url(get_bloginfo('pingback_url')));
	}
}

/**
 * Adicionando suporte a miniaturas
*/
add_theme_support( 'post-thumbnails' );

/**
 * Carregando os estilos e os scripts
*/
function load_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/assets/css2?family=DM+Sans:wght@400;500;700&family=EB+Garamond:wght@400;500;600;700;800&display=swap' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', '', '', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', '', '', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', '', true );
    wp_enqueue_script( 'jquery-scrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', '', '', true );
    wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', '', '', true );
    wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/appear.js', '', '', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', '', '', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', '', '', true );
    wp_enqueue_script( 'tilt', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', '', '', true );
    wp_enqueue_script( 'paroller', get_template_directory_uri() . '/assets/js/jquery.paroller.min.js', '', '', true );
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', '', '', true );
    wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/js/validate.js', '', '', true );
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', '', '', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'load_styles' );
