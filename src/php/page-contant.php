

<?php
    // Template Name: Контакты
?>

<?php
    get_header();
?>

<div class="infoTorts">
        <div class="container">
            <div class="infoTorts">
                <h1 class="infoTorts__title title__adapt">
                    <?php the_title(); ?>
                </h1>
                <div class="infoTorts__bread">
                    <a href="#" class="infoTorts__home">Главная</a>
                    <span class="infoTorts__next">Контакты</span>
                </div>
                <a href="<?php echo get_home_url(); ?>" class="infoTorts__goHome">
                    назад на главную
                </a>
            </div>
        </div>
    </div>
    <div class="adress">
        <div class="adress__container">
            <h2 class="adress__title"><?php the_field("address_contact") ?></h2>
            <div class="adress__phone">
                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/circle-phone.png" alt="logo" class="adress__phone-img">
                <a href="tel:<?php the_field("phone_contact") ?>" class="adress__link-phone"><?php the_field("phone_contact") ?></a>
            </div>
            <div class="adress__network">
                <a href="<?php the_field("url_facebook", 41) ?>" class="adress__network-link">
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/circle-facebook.png" alt="icon" class="adress__network-img">
                </a>
                <a href="<?php the_field("vk_url", 41) ?>" class="adress__network-link">
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/circle-vk.png" alt="icon" class="adress__network-img">
                </a>
                <a href="<?php the_field("inst_url", 41) ?>" class="adress__network-link">
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/circle-instagram.png" alt="icon" class="adress__network-img">
                </a>
            </div>
        </div>
    </div>

    <div class="contact__map" id="contact__map">
       
    </div>


    <script>

        function getYaMap(){
            var myMap = new ymaps.Map("contact__map", {
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

<?php
    get_footer();
?>
