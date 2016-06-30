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

function remove_empty_p($content){
    $content = force_balance_tags($content);
    return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
}

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action( 'widgets_init', 'tavosu_widgets_init' );
add_action('get_header', 'remove_admin_login_header');
add_filter('the_content', 'remove_empty_p', 20, 1);
