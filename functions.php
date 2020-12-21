<?
// add_action( 'wp_enqueue_scripts', 'eliottheme_scripts' );
add_action( 'after_setup_theme', 'eliottheme_setup' );
add_action( 'wp_enqueue_scripts', 'eliottheme_scripts' );
add_action( 'widgets_init', 'smartslider_widgets_init' );

add_filter( 'excerpt_length', function(){
	return 10;
} );
add_filter( 'excerpt_more', 'new_excerpt_more' );

function eliottheme_setup() {
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    
}

function eliottheme_scripts() {
    // wp_enqueue_style( 'style-name', get_stylesheet_uri('style.css') );
    wp_enqueue_style( 'eliottheme-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script('jquery', get_template_directory_uri() . '/dist/jquery.js');
    // swiper
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/swiper/swiper-bundle.css');
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/swiper/swiper-bundle.min.css');
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/swiper/swiper-bundle.js', ['jquery']);
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/swiper/swiper-bundle.min.js');
    // swiper   
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/index.js');
    
}

function smartslider_widgets_init() {
    register_sidebar(array(
        'name'          => 'album',
        'id'            => '2',
        'before_widget' => '<div class="smart_slider_widget_container">',
        'after_widget'  => '</div>'
    ));
}



function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
}

