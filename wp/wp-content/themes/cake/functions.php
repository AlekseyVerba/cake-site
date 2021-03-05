<?php
    add_action("wp_enqueue_scripts", "add_style");
    add_action("wp_enqueue_scripts", "add_script");

    function add_style() {
        wp_enqueue_style("style", get_stylesheet_uri());
    }

    function add_script() {
        wp_enqueue_script("script", get_template_directory_uri()."/assets/js/main.min.js", array(), null, true);
    }

    add_theme_support("menus");
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );

    add_filter('nav_menu_link_attributes', "nav_menu_link", 10, 3);

    function nav_menu_link($atts, $item, $args) {
        if ($args -> menu === "head_left" || $args -> menu === "head_right" || in_category("category_menu")) {
            $atts["class"] = "header__link header-green__link";
            if ($item -> current) {
                $atts["class"] .= " header-green__link-active";
            }
        }
        if ($args -> menu === "main_footer_left" || $args -> menu === "main_footer_right" || in_category("category_menu")) {
            $atts["class"] = "footer__link";
            if ($item -> current) {
                $atts["class"] .= " footer__link-active";
            }
        }

        if ($args -> menu === "main_head_left" || $args -> menu === "main_head_right") {
            $atts["class"] = "header__link";
        }

        if ($args -> menu === "hamburger_main") {
            $atts["class"] = "header__link-hamburger";
        }

        if ($args -> menu === "green_hamburger" || in_category("category_menu")) {
            $atts["class"] = "header__link-hamburger header-green__link-hamburger";
            if ($item -> current) {
                $atts["class"] .= " burger-active";
            }
            // if (item -> current) {
            //     $atts["class"] .= "burger_active";
            // }
        }

        return $atts;
    }
?>