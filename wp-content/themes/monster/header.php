<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="top-nav">
    <div class="inner">
        <?php wp_nav_menu( array( 'theme_location'  =>  'top-menu',
                                    'menu'          =>  'Top Navigation',
                                    'menu_class'    =>  'top-menu',
                                    'menu_id'       =>  '',
            ) ); ?>
        <div class="top-search-form">

        </div>
    </div>
</nav>

<header>
    <div class="inner row">
        <div class="col-xs-12 col-sm-3">Banner Here</div>
        <div class="col-xs-12 col-sm-9 hidden-xs">Adv</div>
    </div>
    <nav id="header-menu">
        <div class="inner">
            <a class="click-to-open-menu visible-xs">O</a>
            <?php wp_nav_menu( array( 'theme_location'  =>  'header-menu',
                'menu'          =>  'Header Menu',
                'menu_class'    =>  'header-menu',
                'menu_id'       =>  '',
            ) ); ?>
        </div>
    </nav>
</header>

<div id="content">
    <div class="inner">

    </div>
</div>