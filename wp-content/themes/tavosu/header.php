<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="description" content="<?php bloginfo ( 'description' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="page-wrapper clearfix">
    <button id="scrollToTop" title="Go to top">
            <!-- Generator: Adobe Illustrator 18.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 41 41" enable-background="new 0 0 41 41" xml:space="preserve">
            <path fill="#BCBBBB" d="M20.5,0.5c-11,0-20,9-20,20c0,11,9,20,20,20c11,0,20-9,20-20C40.5,9.5,31.5,0.5,20.5,0.5z M24.9,23.8
                l-4.4-4.5l-4.4,4.5L15,22.8l5.5-5.6l0,0l0,0l5.5,5.6L24.9,23.8z"/>
            </svg>
    </button>


    <div class="sidebar-navigation">
        <a class="logo-wrap" href="<?php echo home_url()?>">
            <img class="logo" src="<?php header_image()?>" nopin = "nopin">
        </a>
        <div class="menu-icon">
            <span></span>
        </div>
        <?php wp_nav_menu(array('menu' => 'Main menu'));?>
        <div class="mobile-menu">
            <?php wp_nav_menu(array('menu' => 'Main menu'));?>
        </div>
    </div>
    <div class="content container">
        <div class="not-footer">




