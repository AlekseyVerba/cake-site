<?php
    // Template Name: Фронт;
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cc-union.ru</title>

    <?php wp_head();?>

</head>
        

<body>
    
    <div class="header">
                <div class="header__content">

                    <?php
                        wp_nav_menu( [
                            'theme_location'  => '',
                            'menu'            => 'main_head_left', 
                            'container'       => '', 
                            'menu_class'      => 'header__list header__first main__head__list', 
                            'echo'            => true,
                            'items_wrap'      => '<ul class="header__list main__head__list header__first">%3$s</ul>',
                            'depth'           => 1,
                            'walker'          => '',
                        ] );
                    ?>
                <a href="<?php get_home_url(); ?>" class="header__logo">
                <!-- <?php echo get_field("head_logo") ?> -->
                    <img src="<?php the_field("head_logo"); ?>" alt="logo" class="header__logo-img">
                </a>

                    <?php
                        wp_nav_menu( [
                            'theme_location'  => '',
                            'menu'            => 'main_head_right', 
                            'container'       => '', 
                            'menu_class'      => 'header__list main__head__list', 
                            'echo'            => true,
                            'items_wrap'      => '<ul class="header__list main__head__list">%3$s</ul>',
                            'depth'           => 1,
                            'walker'          => '',
                        ] );
                    ?>
                   
            </div>
            <div class="header__network">
                <a href='<?php the_field('inst_url') ?>' class="header__instagram">
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/blue_instagram.png" alt="instagram" class="network">
                </a>
                <a href="<?php the_field('vk_url') ?>">
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/blue_vk.png" alt="vk" class="network">
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
                            'menu'            => 'hamburger_main', 
                            'container'       => '',  
                            'echo'            => true,
                            'items_wrap'      => '%3$s',
                            'depth'           => 1,
                            'walker'          => '',
                        ] );
                    ?>

                <!-- <li class="header__item-hamburger">
                    <a href="" class="header__link-hamburger">
                        Меню
                    </a>
                </li>
                <li class="header__item-hamburger">
                    <a href="" class="header__link-hamburger">
                        Целые торты
                    </a>
                </li>
                <li class="header__item-hamburger">
                    <a href="" class="header__link-hamburger">
                        Программа лояльности
                    </a>
                </li>
                <li class="header__item-hamburger">
                    <a href="" class="header__link-hamburger">
                        Контакты
                    </a>
                </li> -->
                <li class="header__item-hamburger">
                    <a href="<?php the_field('inst_url') ?>" class="header__network-hamburger">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/blue_instagram.png" alt="instagram" class="network">
                    </a>
                    <a href="<?php the_field('vk_url') ?>" class="header__network-hamburger">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/blue_vk.png" alt="vk" class="network">
                    </a>
                </li>
            </ul>
        <div class="header__whiteline"></div>
    </div>
    <div class="main" style="background: url(<?php the_field("img_back") ?>) center no-repeat;">
        <div class="container">
            <div class="main__content">
                <h1 class="main__title"><?php the_field("title_main") ?></h1>
            </div>
        </div>
        <div class="main__circle">
            <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/circle.png" alt="circle">
        </div>
    </div> 
    <div class="description">
        <div class="container">
            <div class="description__text">
                <?php the_field("text_main") ?>
                <button class="description__button">читать далее</button>
            </div>
        </div>
    </div>
    <div class="cake">
        <div class="container">
            <div class="cake__ponchik">
                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/ponchik.jpg.png" alt="ponchik" class="cake__ponchik-img">
            </div>
            <div class="cake__items">
            <?php 
            $rows = get_field('torty_na_glavnoj');
            if($rows)
            {
                $key = 0;
                $className;
                $count;
                foreach($rows as $row)
                {
                    // echo '<li>sub_field_1 = ' . $row['sub_field_1'] . ', sub_field_2 = ' . $row['sub_field_2'] .', etc</li>';
                    // echo $row['name_card'];
                    if ($key === 0) {
                        $className = "cake-one";
                        $count = 1;
                    }
                    if ($key === 1) {
                        $className = "cake-two";
                        $count = 1;
                    }
                    if ($key === 2) {
                        $className = "cake-three";
                        $count = 2;
                    }
                    if ($key === 3) {
                        $className = "cake-four";
                        $count = 3;
                    }
                    if ($key === 4) {
                        $className = "cake-five";
                        $count = 3;
                    }
                    ?>
                        <div class="<?php echo $className ?> cake__item" data-element="<?php echo $count ?>" data-name="<?php echo $row['name_card'] ?>" data-info="<?php echo $row['descr_card'] ?>" data-gramm=<?php echo $row['ves_card'] ?> data-price=<?php echo $row['price_card'] ?>> 
                            <picture>
                                <source srcset="..." media="(max-width: 830px)">
                                <img src="<?php echo $row['card_img'] ?>" alt="cake" class="cake__item-img">
                            </picture>
                        </div>
                    <?php
                    $key += 1;
                }
            }
?>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div class="about__items">


                <?php

                    // проверяем есть ли в повторителе данные
                    if( have_rows('priemushhestva') ):

                        // перебираем данные
                        while ( have_rows('priemushhestva') ) : the_row();

                            // отображаем вложенные поля
                            // the_sub_field('sub_field_name');

                            ?>
                            <div class="about__item">
                                <div class="about__item-img">
                                    <img src="<?php the_sub_field('img_best'); ?>" alt="logo">
                                </div>
                                <h3 class="about__item-title"><?php the_sub_field('title_best'); ?></h3>
                                <div class="about__item-text">
                                <?php the_sub_field('descr_best'); ?>
                                </div>
                            </div>
                            <?php

                        endwhile;

                    else :

                        // вложенных полей не найдено

                    endif;

                ?>
            </div>
        </div>
    </div>

    <div class="slider">
        <div class="slider__container">
            <div class="slider__des"></div>
            <div class="slider__buttons">
                <button class="slider__left slider__button"></button>
                <button class="slider__right slider__button"></button>
            </div>
            <div class="slider__wrapper">
                <div class="slider__content">
                <?php

                // проверяем есть ли в повторителе данные
                if( have_rows('slider') ):

                    // перебираем данные
                    while ( have_rows('slider') ) : the_row();
                        // ?>
                            <div class="slider__item">
                                <!-- <img src="<?php the_sub_field('foto_slajdera'); ?>" alt="slider" /> -->
                                <!-- <?php var_dump(get_sub_field('foto_slajdera')) ?> -->
                                <picture>
                                    <?php $per=get_sub_field('foto_slajdera'); ?>
                                    <source srcset="<?php echo $per["sizes"]["medium"] ?>" media="(max-width: 300px)">
                                    <source srcset="<?php echo $per["sizes"]["medium-large"] ?>" media="(max-width: 768px)">
                                    <img src="<?php echo $per["url"] ?>" alt="item" />
                                </picture>
                            </div>
                        <?php

                    endwhile;

                else :
                endif;

                ?>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="contact__title">
            Контакты
        </div>
        <div class="contact__content">
            <div class="contact__info">
                <div class="contact__wrapper">
                    <div class="contact__block">
                        <?php the_field("address_main") ?>
                    </div>
                    <div class="contact__block">
                        <h5 class="contact__subtitle">телефон:</h5>
                        <a href="tel:<?php the_field("phone_main") ?>" class="contact__link"><?php the_field("phone_main") ?></a>
                    </div>
                    <div class="contact__block">
                        <h5 class="contact__subtitle">email:</h5>
                        <a href="mailto:<?php the_field("main_main") ?>" class="contact__link"><?php the_field("main_main") ?></a>
                    </div>
                    <div class="contact__block">
                        <h5 class="contact__subtitle">Мы в социальных сетях:</h5>
                        <div style="display: flex">
                            <a href="<?php the_field('vk_url') ?>" style="margin-right: 5px" />
                                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/blue_vk.png" alt="network" class="contant__network network"/>
                            </a>
                            <a href="<?php the_field('inst_url') ?>" />
                                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/blue_instagram.png" alt="network" class="contant__network network"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="index__map" id="map">
               
                <!-- <div id="map" class="map__map"></div> -->
               
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer__container">
            <div class="footer__content">
                <ul class="footer__list footer__first">

                    <?php 
                        wp_nav_menu( [
                            'theme_location'  => '',
                            'menu'            => 'main_footer_left', 
                            'container'       => '',  
                            'echo'            => true,
                            'items_wrap'      => '%3$s',
                            'depth'           => 1,
                            'walker'          => '',
                        ] );
                    ?>

                    <!-- <li class="footer__item">
                        <a href="#" class="footer__link">Меню</a>
                        <div class="footer__line"></div>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Целые торты</a>
                        <div class="footer__line"></div>
                    </li> -->
                </ul>
               <div class="footer__logo">
                    <a href="<?php the_field('vk_url') ?>">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/white_vk.png" alt="vk" class="footer__vk network">
                    </a>
                   <a href="#" class="footer__logo-link">
                        <img src="<?php the_field("footer_logo"); ?>" alt="logo" class="footer__logo-img">
                   </a>
                   <a href="<?php the_field('inst_url') ?>">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/white_instagram.png" alt="instagram" class="footer__instagram network">
                    </a>
               </div>
                <ul class="footer__list footer__second">

                    <?php 
                        wp_nav_menu( [
                            'theme_location'  => '',
                            'menu'            => 'main_footer_right', 
                            'container'       => '',  
                            'echo'            => true,
                            'items_wrap'      => '%3$s',
                            'depth'           => 1,
                            'walker'          => '',
                        ] );
                    ?>
                    <!-- <li class="footer__item">
                        <a href="#" class="footer__link">Программа лояльности</a>
                        <div class="footer__line"></div>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Контакты</a>
                        <div class="footer__line"></div>
                    </li> -->
                </ul>
           </div>
           <a href="#" class="footer__developer">
                <span>Разработка</span>
                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/trueCode.png" alt="">
           </a>
        </div>
    </div>
    <script>

function getYaMap(){
            var myMap = new ymaps.Map("map", {
                center: [<?php the_field("cordiante"); ?>],
                controls: [],
                zoom: <?php the_field("zoom"); ?>
            });

            var myPlacemark = new ymaps.Placemark([<?php the_field("cordiante"); ?>], {
                    balloonContent: '<?php the_field("map_text") ?>',
                    iconContent: '<?php the_field("icon_sontent") ?>',
                    hintContent: '<?php the_field("hint_Content")?>',
                }, {
                    preset: 'islands#greenStretchyIcon'
                });
                myMap.geoObjects.add(myPlacemark);  

                myMap.controls.remove();
                myMap.behaviors.disable('scrollZoom');

                //на мобильных устройствах... (проверяем по userAgent браузера)
                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                    //... отключаем перетаскивание карты
                    myMap.behaviors.disable('drag');
                }

            // var myGeoObject = new ymaps.GeoObject({
            //     geometry: {
            //         type: "Point", // тип геометрии - точка
            //         coordinates: [52.281374, 104.284550] // координаты точки
            //     }
            // });
            // myMap.geoObjects.add(myGeoObject); 
            // myMap.controls.remove();
        }

        function downloadJSAtOnload() {
            var element = document.createElement("script");
            element.src = "https://api-maps.yandex.ru/2.1/?&lang=ru_RU&onload=getYaMap";
            document.head.appendChild(element);
        }

        window.addEventListener('load', function() {
            downloadJSAtOnload();
        });
    </script>
    <?php wp_footer();?>
</body>

</html>