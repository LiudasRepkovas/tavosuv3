<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="description" content="<?php bloginfo ( 'description' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/fonts/roboto.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="page-wrapper clearfix">

    <div class="sidebar-navigation">
        <a class="logo-wrap" href="<?php echo home_url()?>">
            <img class="logo" src="<?php header_image()?>">
        </a>
        <div class="description-wrapper">
            <div class="description">
                <?php bloginfo ( 'description' );?>
            </div>
        </div>
        <div class="menu-icon">
            <span></span>
        </div>
        <?php wp_nav_menu(array('menu' => 'Main menu'));?>

        <?php if ( is_active_sidebar( 'sidebar_bottom' ) ) : ?>
            <div class="sidebar-bottom widget-area" role="complementary">
                <ul>
                    <?php dynamic_sidebar( 'sidebar_bottom' ); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="copyright">
            © 2016 Tavosu. All rights reserved.
        </div>
    </div>
    <div class="content container">




