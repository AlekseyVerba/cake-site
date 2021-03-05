<?php
    add_action("wp_enqueue_scripts", "add_style");
    add_action("wp_enqueue_scripts", "add_script");

    function add_style() {
        wp_enqueue_style("style", get_stylesheet_uri());
    }

    function add_script() {
        wp_enqueue_script("script", get_template_directory_uri()."/assets/js/main.min.js", array(), null, true);
        wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
 	    wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/js/components/loadmore.js', array('jquery'), time() );
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


    function true_load_posts(){
 
        $args = unserialize( stripslashes( $_POST['query'] ) );
        $args['paged'] = $_POST['page'] + 1; // следующая страница
        $args['post_status'] = 'publish';
     
        // обычно лучше использовать WP_Query, но не здесь
        query_posts( $args );
        // если посты есть
        if( have_posts() ) :
     
            // запускаем цикл
            while( have_posts() ): the_post();
     
                get_template_part( 'template-parts/post/content', get_post_format() );
     
            endwhile;
     
        endif;
        die();
    }
     
     
    add_action('wp_ajax_loadmore', 'true_load_posts');
    add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
?>