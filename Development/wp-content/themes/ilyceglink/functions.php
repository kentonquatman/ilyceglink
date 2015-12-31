<?php

if ( ! function_exists( 'ilyceglink_setup' ) ) :

/**************************************************
 SET-UP THEME DEFAULTS
**************************************************/

function ilyceglink_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 600, 600, true );
	add_image_size( 'hero-image', 1260, 360, true );
	add_image_size( 'home-slide', 1260, 540, true );
	add_image_size( 'feed-hero', 900, 270, true );
	add_image_size( 'book-cover', 300, 0, false );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'headernav'  => __( 'Header Nav', 'ilyceglink' ),
		'footernav'  => __( 'Footer Nav', 'ilyceglink' ),
		'sidebarnav' => __( 'Sidebar Nav', 'ilyceglink' ),
		'networknav' => __( 'Network Nav', 'ilyceglink' )
	) );

	// Switch default core markup to HTML5.
	add_theme_support('html5',array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	));

}

endif; // ilyceglink_setup

add_action( 'after_setup_theme', 'ilyceglink_setup' );

/**************************************************
 ENQUEUE SCRIPTS & STYLES FOR HEADER
**************************************************/

function ilyceglink_scripts() {

	// Load the Internet Explorer specific stylesheet.
	
	wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_script( 'header-scripts', get_template_directory_uri() . '/assets/js/scripts.head.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'ilyceglink_scripts' );

/**************************************************
 COMMENTS MARK-UP
**************************************************/

function my_custom_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  echo
    '<li>',
    comment_text(),
    '<small>By ',
    comment_author(),
    ' on ',
    comment_date(),
    ' - ',
    comment_time(),
    '</small>',
    '</li>';
}

/**************************************************
 PAGINATION FIXES
**************************************************/

add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
  return 'class="next"';
}
function posts_link_attributes_2() {
  return 'class="prev"';
}

/**************************************************
 PAGE EXCERPTS
**************************************************/

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages(){
  add_post_type_support('page','excerpt');
}