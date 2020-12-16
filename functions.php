<?
add_action( 'wp_enqueue_scripts', 'eliottheme_scripts' );

add_action( 'widgets_init', 'smartslider_widgets_init' );

add_filter( 'excerpt_length', function(){
	return 10;
} );
add_filter( 'excerpt_more', 'new_excerpt_more' );

function eliottheme_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri('style.css') );    

    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/dist/jquery.js');
    // wp_enqueue_script('newscript', get_template_directory_uri() . '/js/custom_script.js');
    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/jquery.js');
    // wp_register_script( 'jquery3.2.1', 'https://code.jquery.com/jquery-3.2.1.min.js' );
    // wp_add_inline_script( 'jquery3.2.1', 'var jQuery3_2_1 = $.noConflict(true);' );
    // wp_enqueue_script( 'plugin-javascript', plugins_url( 'js.js', __FILE__ ), array( 'jquery3.2.1' ) );

    // swiper
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/swiper/swiper-bundle.css');
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/swiper/swiper-bundle.min.css');
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/swiper/swiper-bundle.js');
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/swiper/swiper-bundle.min.js');
    // swiper   
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/index.js');

    // menu
    register_nav_menu( 'top', 'top_menu' );
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

