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

    add_filter('nav_menu_link_attributes', "nav_menu_link", 10, 3);

    function nav_menu_link($atts, $item, $args) {
        if ($args -> menu === "head_left" || $args -> menu === "head_right") {
            $atts["class"] = "header__link header-green__link";
        }

        if ($args -> menu === "main_head_left" || $args -> menu === "main_head_right") {
            $atts["class"] = "header__link";
        }

        return $atts;
    }
?>