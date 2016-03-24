<?php
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
register_nav_menus(
    array(
        'main_menu' => 'Main menu',
        'social_menu' => 'Social menu',
    )
);
function tavosu_widgets_init() {

    register_sidebar( array(
        'name'          => 'Sidebar bottom',
        'id'            => 'sidebar_bottom',
        'before_widget' => '<li class="social-icon">',
        'after_widget'  => '</li>',
    ) );
}

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action( 'widgets_init', 'tavosu_widgets_init' );
add_action('get_header', 'remove_admin_login_header');

