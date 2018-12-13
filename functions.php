<?php

// Loading in CSS 'n Javascript

function RD4_resources() {

	wp_enqueue_style( 'skeleton',  get_template_directory_uri() .'/css/skeleton.css', array(), null, 'all' );
    wp_enqueue_style( 'normalize',  get_template_directory_uri() .'/css/normalize.css', array(), null, 'all' );
    wp_enqueue_style( 'owl.carousel',  get_template_directory_uri() .'/css/owl.carousel.css', array(), null, 'all' );
    wp_enqueue_style( 'owl.theme',  get_template_directory_uri() .'/css/owl.theme.css', array(), null, 'all' );
    wp_enqueue_style( 'owl.transitions',  get_template_directory_uri() .'/css/owl.transitions.css', array(), null, 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), '', null, 'all' );
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/jquery-3.1.0.min.js', array(), '3.1.0', true);
    wp_enqueue_script('owl.carousel.js', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', array(), '1.3.2', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/functions.js', array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'RD4_resources');

// Theme Setup

function RD4_setup() {

		// Navigation Menus
		register_nav_menus(array(
		'primary' => __('Primary Menu'),
	));

		// Add featured image support
		add_theme_support('post-thumbnails');
		add_image_size('first-thumbnail', 600, 600, true);
		add_image_size('slider-image', 960, 350, array('center', 'center'));
		add_image_size('banner-image', 920, 210, array('center', 'center'));
}


add_action('after_setup_theme', 'RD4_setup');

// Widget Boogaloo

function ourWidgetsInit() {

	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="sidebar-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="sidebar-title">',
		'after_title' => '</h2>',
	));

	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer4',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));


}

add_action('widgets_init', 'ourWidgetsInit');


// Excerpt Word Count Length
function custom_excerpt_length() {
	return 36;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Author Bio

function author_bio ($content=''){

	if(!is_page_template($template = 'page-about.php')) {

    global $post;

    $content.="<hr>\n";
    $content.="<div class='row'>";
    $content.="<div class='three columns align' id='ca'>";
    $content.=get_avatar( get_the_author_meta('ID'), 110);
    $content.="<p>".get_the_author_meta("nickname")."</p>\n";
    $content.="</div>";
    $content.="<div class='nine columns' id='ac'>";
    $content.= "<p>".get_the_author_meta("description")."</p>\n";
    $content.="</div>";
    $content.="</div>";

    return $content;

  }

  else {
  	return $content;
  }

}

add_filter('the_content', 'author_bio');



// Linking all post thumbnails to the post permalink

function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}

add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );


?>
