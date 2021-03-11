<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <link rel="icon" href=<?php the_field("favicon", 41); ?> sizes="32x32"/>
    <link rel="preload" href="assets/fonts/1440.ttf" as="font"/>
    <link rel="preload" href="assets/fonts/3976.ttf" as="font"/>
    <link rel="preload" href="assets/fonts/9622.ttf" as="font"/>
    <link rel="preload" href="assets/fonts/14078.ttf" as="font"/>
    <link rel="preload" href="assets/fonts/Lato-Regular.ttf" as="font"/>
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
            <!-- <ul class="header__list header__first">

            
                <li class="header__item">
                    <a href="#" class="header__link header-green__link">Меню</a>
                    <div class="header__line"></div>
                </li>
                <li class="header__item">
                    <a href="#" class="header__link header-green__link">Целые торты</a>
                    <div class="header__line"></div>
                </li>
            </ul> -->
        <!-- <a href="#" class="header__logo header-green__logo">
            <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/bigBlueLogo.png" alt="logo" class="header__logo-img header-green__logo-img">
        </a> -->
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
            <!-- <ul class="header__list header__second">
                <li class="header__item">
                    <a href="#" class="header__link header-green__link">Программа лояльности</a>
                    <div class="header__line"></div>
                </li>
                <li class="header__item">
                    <a href="#" class="header__link header-green__link">Контакты</a>
                    <div class="header__line"></div>
                </li>
            </ul> -->
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

        <!-- <li class="header__item-hamburger">
            <a href="" class="header__link-hamburger header-green__link-hamburger">
                Меню
            </a>
        </li>
        <li class="header__item-hamburger">
            <a href="" class="header__link-hamburger header-green__link-hamburger">
                Целые торты
            </a>
        </li>
        <li class="header__item-hamburger">
            <a href="" class="header__link-hamburger header-green__link-hamburger">
                Программа лояльности
            </a>
        </li>
        <li class="header__item-hamburger">
            <a href="" class="header__link-hamburger header-green__link-hamburger">
                Контакты
            </a>
        </li> -->
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

