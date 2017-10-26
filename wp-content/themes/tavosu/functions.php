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


/** CMB STUFF */

/**
 * Get the bootstrap!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
    require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
    require_once  __DIR__ . '/CMB2/init.php';
}

add_action( 'cmb2_admin_init', 'register_cmb_fields' );
/**
 * Define the metabox and field configurations.
 */



function register_cmb_fields() {
    // Start with an underscore to hide fields from custom fields list.
    $prefix = '_prefix_';
    /**
     * Sample metabox to demonstrate the different conditions you can set.
     */
    $cmb = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => 'Attachment',
        'object_types'  => array( 'post' ), // Post type.
    ) );
   
    // Example conditionals within a group.
    $attachment_group = $cmb->add_field( array(
        'id'          => $prefix . 'repeatable-group',
        'type'        => 'group',
        'description' => 'Attach videos or images to a post',
        'options'     => array(
            'group_title'   => 'Entry {#}', // Since version 1.1.4, {#} gets replaced by row number.
            'add_button'    => 'Add Another Entry',
            'remove_button' => 'Remove Entry',
            'sortable'      => true, // Beta.
        ),
    ) );
    $cmb->add_group_field( $attachment_group, array(
        'name'    => 'Type',
        'id'      => 'attachment_type',
        'type'    => 'radio_inline',
        'options' => array(
            'embed' => __( 'Embed', 'cmb2' ),
            'image'   => __( 'Image', 'cmb2' ),
        ),
    ) );
    
    $cmb->add_group_field( $attachment_group, array(
        'name' => 'Embed Url',
        'description' => 'Embed url',
        'id'   => 'embed',
        'type' => 'oembed',
        'attributes' => array(
            'required'               => true, // Will be required only if visible.
            'data-conditional-id'    => json_encode( array( $attachment_group, 'attachment_type' ) ),
            'data-conditional-value' => 'embed',
        ),
    ) );

    $cmb->add_group_field( $attachment_group, array(
        'name' => 'Image',
        'id'   => 'image',
        'type' => 'file',
        'attributes' => array(
            'required'               => true, // Will be required only if visible.
            'data-conditional-id'    => json_encode( array( $attachment_group, 'attachment_type' ) ),
            'data-conditional-value' => 'image',
        ),
    ) );
    
    $cmb->add_group_field( $attachment_group, array(
        'name' => 'Image text',
        'id'   => 'image_text',
        'type' => 'text',
        'attributes' => array(
            'required'               => false, // Will be required only if visible.
            'data-conditional-id'    => json_encode( array( $attachment_group, 'attachment_type' ) ),
            'data-conditional-value' => 'image',
        ),
    ) );

// questions
    // $cmb1 = new_cmb2_box( array(
    //     'id'            => $prefix . 'metabox1',
    //     'title'         => 'FAQ',
    //     'object_types'  => array( 'page' ), // Post type.
        
    // ) );

    // $attachment_group1 = $cmb1->add_field( array(
    //     'id'          => $prefix . 'repeatable-group1',
    //     'type'        => 'group',
    //     'description' => 'Add frequantly asked questions to a page',
    //     'options'     => array(
    //         'group_title'   => 'Entry {#}', // Since version 1.1.4, {#} gets replaced by row number.
    //         'add_button'    => 'Add Another Entry',
    //         'remove_button' => 'Remove Entry',
    //         'sortable'      => true, // Beta.
    //     ),
    // ) );

    // $cmb1->add_group_field( $attachment_group1, array(
    //     'name'    => 'Question',
    //     'id'      => 'faq_question',
    //     'type'    => 'text',
    //     'attributes' => array(
    //         'required'               => true, // Will be required only if visible.
    //     )
    // ) );

    
    // $cmb1->add_group_field( $attachment_group1, array(
    //     'name'    => 'Answer',
    //     'id'      => 'faq_answer',
    //     'type'    => 'text',
    //     'attributes' => array(
    //         'required'               => true, // Will be required only if visible.
    //     )
    // ) );
}


