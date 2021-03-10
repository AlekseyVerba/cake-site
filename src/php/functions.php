<?php

require(ABSPATH.'/mailer/PHPMailerAutoload.php'); 
$email_from = 'wordpress@cake-a.tw1.ru';
$email_to = "junior.dev9@t-code.ru";


add_action('wp_enqueue_scripts', 'project_scripts' ); // хук автоматом сработает во время wp_head
function project_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', get_stylesheet_directory_uri() .'/assets/js/jquery.min.js', array(), null, false);
    wp_enqueue_script('jquery');

    // wp_register_script('plugins', get_stylesheet_directory_uri() .'/assets/js/plugins.min.js', array('jquery'), null, true);
    // wp_enqueue_script('plugins');

    wp_register_script('script', get_stylesheet_directory_uri() .'/assets/js/main.min.js', array('jquery'), null, true);
    wp_enqueue_script('script');

}

/*Подзагрузка AJAX*/ 
add_action( 'wp_enqueue_scripts', 'myajax_data', 99 ); 
function myajax_data(){ 
  wp_localize_script('script', 'myajax', 
    array( 
      'url' => admin_url('admin-ajax.php') 
    ) 
  ); 
}
    // wp_deregister_script( 'jquery' );
    // wp_register_script('jquery', get_stylesheet_directory_uri() .'/assets/js/jquery.min.js', array(), null, false);
    // wp_enqueue_script('jquery');
    add_action("wp_enqueue_scripts", "add_style");
    // add_action("wp_enqueue_scripts", "add_script");

    function add_style() {
        wp_enqueue_style("style", get_stylesheet_uri());
    }

    // function add_script() {
    //     wp_enqueue_script("script", get_template_directory_uri()."/assets/js/main.min.js", array(), null, true);
    // }
//     add_action( 'wp_enqueue_scripts', 'myajax_data', 99 ); 

//     function myajax_data(){ 
//     wp_localize_script('script', 'myajax', 
//         array( 
//         'url' => admin_url('admin-ajax.php') 
//         ) 
//     ); 
// }
    // function true_loadmore_scripts() {
    //     // wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
    //     wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . 'assets/js/components/loadmore.js', array('jquery'), time() );
    // }
    // add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

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

    // function true_load_posts(){
    //     $args = unserialize( stripslashes( $_POST['query'] ) );
    //     $args['paged'] = $_POST['page'] + 1; // следующая страница
    //     $args['post_status'] = 'publish';
    //     // print_r($args);
    //     // echo $args;
     
    //     // обычно лучше использовать WP_Query, но не здесь
    //     query_posts( $args );
    //     // если посты есть
    //     if( have_posts() ) :
     
    //         // запускаем цикл
    //         while( have_posts() ): the_post();
    //             // get_template_part( 'template-parts/post/content', get_post_format() );
     
    //         endwhile;
     
    //     endif;
    //     die();
    // }

    // add_action('wp_ajax_loadmore', 'true_load_posts');
    // add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');


    add_action('wp_ajax_news_loadmore', 'true_load_news');
    add_action('wp_ajax_nopriv_news_loadmore', 'true_load_news');
    function true_load_news(){
    $args = unserialize( stripslashes( $_POST['query'] ) );
    // print_r($args);
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';
    query_posts( $args );
    if( have_posts() ) :
    
        while( have_posts() ): the_post();
        // print_r($args["post_type"]);
            if ($args["post_type"][0] === "celtorts") {
                get_template_part( 'card-tort', get_post_format() );
            } else {
                get_template_part( 'card-news', get_post_format() );
            }
        endwhile;
    
    endif;
    die();
    }


    // Отправка формы партнеры
add_action('wp_ajax_application_fun', 'parthers'); 
add_action('wp_ajax_nopriv_application_fun', 'parthers');
add_action("wp_ajax_page-cont", 'parthers');
add_action("wp_ajax_page-cont", 'parthers');
function parthers() { 

  global $email_from; 
  global $email_to; 
  $mail = new PHPMailer; 
  $mail->setFrom($email_from, 'Заявка с сайта');
  $mail->addAddress($email_to); 
  $mail->addAddress("test@t-code.ru");
  $mail->IsHTML(true); 
  $mail->CharSet = 'UTF-8'; 

  $form = $_POST['form']; 

  $mail->Subject = 'Письмо с сайта'; 
  $echo = "Ваше сообщение отправлено"; 

  $mail->Body = ''; 


  foreach($form as $data){ 
    switch($data['name']){ 

      case 'title': 
      $mail->Body .= 'Тема письма: '.$data['value'].'<br>'; 
      break;

      case 'tort': 
    $mail->Body .= 'Торт: '.$data['value'].'<br>'; 
    break;
        
        case "choise":
            $mail -> Body .= "Скидка ".$data['value']."<br>";
            break;

      case 'surname': 
        $mail->Body .= 'Фамилия: '.$data['value'].'<br>'; 
        break;

        case 'patronymic': 
            $mail->Body .= 'Отчество: '.$data['value'].'<br>'; 
            break;

      case 'name': 
      $mail->Body .= 'Имя: '.$data['value'].'<br>'; 
      break;

      case 'phone': 
      $mail->Body .= 'Номер телефона: '.$data['value'].'<br>'; 
      break; 
      
      case 'email': 
      $mail->Body .= 'email: '.$data['value'].'<br>'; 
      break; 
  
      case 'message': 
      $mail->Body .= 'Комментарий: '.$data['value'].'<br>'; 
      break; 

      }

  } 

  $mail->Send(); 

  echo $echo; 

  die(); 
};
     
     