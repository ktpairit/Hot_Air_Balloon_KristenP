<?php
/*-- Enable Widgets-- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => 'First Widget',
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar( array(
        'name' => 'Footer Left',
        'id' => 'footer-left',
        'description' => 'Widget for our left side of our footer',
        'before_widget' => '<div class="widget-sidebar widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
        register_sidebar( array(
        'name' => 'Footer Middle',
        'id' => 'footer-middle',
        'description' => 'Widget for our middle of our footer',
        'before_widget' => '<div class="widget-sidebar widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
        register_sidebar( array(
        'name' => 'Footer Right',
        'id' => 'footer-right',
        'description' => 'Widget for our right side of our footer',
        'before_widget' => '<div class="widget-sidebar widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
        register_sidebar( array(
        'name' => 'Front Page Sidebar',
        'id' => 'front-page',
        'description' => 'Widget for Front page sidebar',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
}

/*-- Enable Widgets-- */
add_action('widgets_init', 'blank_widgets_init');

/*-- Enable Menu --*/
add_theme_support('menus');

/*-- Enable Header Image --*/
add_theme_support('custom-header', array(
    'width' => 1200,
    'flex-width' => true,
    'height' => 400,
    'flex-height' => true,
    'uploads' => true,
    'header-text' => true,
    ));

/*-- Enable Post Thumbnails --*/
add_theme_support('post-thumbnails');
?>