<?php

// function custom_theme_assets() {
// 	wp_enqueue_style( 'style', get_stylesheet_uri() );
// }

// add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );



function wpdocs_theme_slug_widgets_init() {
	
    register_sidebar( array(
        'name'          => __( 'Header', 'textdomain' ),
        'id'            => 'header',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer-1', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
	
	register_sidebar( array(
        'name'          => __( 'Footer-2', 'textdomain' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
	
	register_sidebar( array(
        'name'          => __( 'Footer-3', 'textdomain' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
	
	register_sidebar( array(
        'name'          => __( 'Copyright', 'textdomain' ),
        'id'            => 'copyright',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );


	
	
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


