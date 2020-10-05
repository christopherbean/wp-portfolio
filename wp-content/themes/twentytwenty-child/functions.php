<?php
/*
* Twenty Twenty Child Functions and Definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Twenty Twenty
* @since Twenty Twenty 2.0
*/

//Enqueue Scripts and Styles
function twentytwenty_child_scripts(){
    wp_enqueue_style('twentytwenty-style', get_template_directory_uri() .'/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('twentytwenty-style'));
}

add_action('wp_enqueue_scripts', 'twentytwenty_child_scripts');

//Dynamic sidebar
function twentytwenty_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Contact sidebar', 'twentytwenty-child'),
	    'id' => 'sidebar-3',
	    'description' => __( 'Appears on all pages minus the contact page.', 'twentytwenty-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'twentytwenty_child_widget_init' );

//Custom post types function
function create_custom_post_types() {
    register_post_type( 'projects',
            array(
                'labels' => array(
                    'name' => __( 'Projects' ),
                    'singular_name' => __( 'Project' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array( 'slug' => 'projects' ),
            )
    
     );
    register_post_type( 'services',
            array(
                'labels' => array(
                    'name' => __( 'Services'),
                    'singular_name' => __( 'Service' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array( 'slug' => 'services' ),
            )
    );
}

add_action( 'init', 'create_custom_post_types' );
