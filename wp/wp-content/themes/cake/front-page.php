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
                            'menu_class'      => 'header__list header__first', 
                            'echo'            => true,
                            'items_wrap'      => '<ul class="header__list header__first">%3$s</ul>',
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
                            'menu_class'      => 'header__list header__first', 
                            'echo'            => true,
                            'items_wrap'      => '<ul class="header__list header__first">%3$s</ul>',
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
                <li class="header__item-hamburger">
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
                </li>
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
    <div class="main">
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
                это кондитерская-кофейня со светлым, легким интерьером, множеством сладких радостей нашего производства и кофе, который обязательно порадует вас бодростью и вкусом! 
                Помимо этого у нас вы найдете сытные завтраки, сандвичи, быстрый Wi-Fi и мнооооого розеток =)
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
                <div class="cake-one cake__item" data-element="1" data-name="Три шоколада" data-info="Муссовый торт из трёх видов бельгийского шоколада" data-gramm=120 data-price=220> 
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/one-cake.png" alt="cake" class="cake__item-img">
                </div>
                <div class="cake__wrapper">
                    <div class="cake-two cake__item" data-element="1" data-name="Торт 'Красный 'бархат'" data-info="Нежный бисквит пропитанный малиновым вареньем в сочетании со сливочным сыром" data-gramm=160 data-price=190>
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/two-cake.png" alt="cake" class="cake__item-img">
                    </div>
                </div>
                <div class="cake-three cake__item" data-element="2"  data-name="Фисташка-Малина" data-info="Фисташковый бисквит с малиновым желе" data-gramm=125 data-price=220>
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/three-cake.png" alt="cake" class="cake__item-img">
                </div>
                <div class="cake-four cake__item" data-element="3" data-name="Наполеон с заварным кремом" data-info="Девять хрустящих коржей с фирменным заварным кремом" data-gramm=120 data-price=190>
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/four-cake.png" alt="cake" class="cake__item-img">
                </div>
                <div class="cake-five cake__item" data-element="3" data-name="Чизкейк классический" data-info="Творожно-сырный пирог на песочной основе" data-gramm=110 data-price=200>
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/five-cake.png" alt="cake" class="cake__item-img">
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div class="about__items">
                <div class="about__item">
                    <div class="about__item-img">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/one-logo.png" alt="logo">
                    </div>
                    <h3 class="about__item-title">ДЕСЕРТЫ</h3>
                    <div class="about__item-text">
                        Наши десерты с любовью приготовлены по секретным авторским рецептам, используя только качественные ингредиенты. О них давно уже ходят 
                    </div>
                </div>
                <div class="about__item">
                    <div class="about__item-img">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/two-logo.png" alt="logo">
                    </div>
                    <h3 class="about__item-title">ОСНОВНОЕ МЕНЮ</h3>
                    <div class="about__item-text">
                        В меню udcкафе можно найти блюдо на любой вкус: от легких фитнес-салатов до сочных бургеров и аппетитных паст. Кстати, завтраки мы подаем целый день!
                    </div>
                </div>
                <div class="about__item">
                    <div class="about__item-img">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/three-logo.png" alt="logo">
                    </div>
                    <h3 class="about__item-title">КОФЕ И НАПИТКИ</h3>
                    <div class="about__item-text">
                        Мы уделяем особое внимание кофе, отслеживая его качество от кофейного дерева до вашей чашки. У нас можно попробовать, как классические кофейные
                    </div>
                </div>
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
                    <div class="slider__item">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/IMG_1160.jpg.png" alt="slider" />
                    </div>
                    <div class="slider__item">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/IMG_1160.jpg.png" alt="slider" />
                    </div>
                    <div class="slider__item">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/IMG_1160.jpg.png" alt="slider" />
                    </div>
                    <div class="slider__item">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/IMG_1160.jpg.png" alt="slider" />
                    </div>
                    <div class="slider__item">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/IMG_1160.jpg.png" alt="slider" />
                    </div>
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
                        <p >г. Иркутск</p>
                        <P>ул. Карла Маркса, 26А</P>
                    </div>
                    <div class="contact__block">
                        <h5 class="contact__subtitle">телефон:</h5>
                        <a href="tel:8(395)276-71-00" class="contact__link">8 (395) 276-71-00</a>
                    </div>
                    <div class="contact__block">
                        <h5 class="contact__subtitle">email:</h5>
                        <a href="mailto:info@cc-union.ru" class="contact__link">info@cc-union.ru</a>
                    </div>
                    <div class="contact__block">
                        <h5 class="contact__subtitle">Мы в социальных сетях:</h5>
                        <a href="<?php the_field('vk_url') ?>" />
                            <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/blue_vk.png" alt="network" class="contant__network network"/>
                        </a>
                        <a href="<?php the_field('inst_url') ?>" />
                            <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/blue_instagram.png" alt="network" class="contant__network network"/>
                        </a>
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
                    <li class="footer__item">
                        <a href="#" class="footer__link">Меню</a>
                        <div class="footer__line"></div>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Целые торты</a>
                        <div class="footer__line"></div>
                    </li>
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
                    <li class="footer__item">
                        <a href="#" class="footer__link">Программа лояльности</a>
                        <div class="footer__line"></div>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Контакты</a>
                        <div class="footer__line"></div>
                    </li>
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
                center: [52.281374, 104.284550],
                controls: [],
                zoom: 15
            });
            myMap.controls.remove();
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