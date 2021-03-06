<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <link rel="preload" href="<?php bloginfo("template_url"); ?>/assets/fonts/1440.ttf" as="font" crossorigin="anonymous"/>
    <link rel="preload" href="<?php bloginfo("template_url"); ?>/assets/fonts/14078.ttf" as="font" crossorigin="anonymous"/>
    <?php wp_head(); ?>
</head>
<body>
    <div class="header header-green">
        <div class="header__content">
            <?php
                wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'head_left', 
                    'container'       => '', 
                    'menu_class'      => 'header__list header__first', 
                    'echo'            => true,
                    'items_wrap'      => '<ul class="header__list header__first">%3$s</ul>',
                    'depth'           => 1,
                    'walker'          => '',
                ] );
            ?>
        <?php the_custom_logo() ?>
        <?php
                wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'head_right', 
                    'container'       => '', 
                    'menu_class'      => 'header__list header__second', 
                    'echo'            => true,
                    'items_wrap'      => '<ul class="header__list header__second">%3$s</ul>',
                    'depth'           => 1,
                    'walker'          => '',
                ] );
            ?>
    </div>
    <div class="header__network">
        <a href="<?php the_field("inst_url", 41) ?>" class="header__instagram">
            <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/white_instagram.png" alt="instagram" class="network">
        </a>
        <a href="<?php the_field("vk_url", 41) ?>">
            <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/white_vk.png" alt="vk" class="network">
        </a>
    </div>
    <div class="menu-icon">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
    <ul class="header__list-hamburger">
            <?php
                wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'green_hamburger', 
                    'echo'            => true,
                    'items_wrap'      => '%3$s',
                    'depth'           => 1,
                    'walker'          => '',
                ] );
            ?>
        <li class="header__item-hamburger">
            <a href="<?php the_field("vk_url", 41) ?>" class="header__network-hamburger">
                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/white_instagram.png" alt="instagram" class="network">
            </a>
            <a href="<?php the_field("inst_url", 41) ?>" class="header__network-hamburger">
                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/white_vk.png" alt="vk" class="network">
            </a>
        </li>
    </ul>
        <div class="header__whiteline header-green__blueLine"></div>
    </div>

