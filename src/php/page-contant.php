

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
                    <!-- <a href="#" class="infoTorts__home">Главная</a>
                    <span class="infoTorts__next">Контакты</span> -->
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </div>
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
                <a href="tel:<?php the_field("phone_main", 41) ?>" class="adress__link-phone"><?php the_field("phone_main", 41) ?></a>
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
    var twoIndex = false;
function getYaMap(){
            var myMap = new ymaps.Map("contact__map", {
                center: [<?php the_field("cordiante", 41); ?>],
                controls: [],
                zoom: <?php the_field("zoom", 41); ?>
            });

            var myPlacemark = new ymaps.Placemark([<?php the_field("cordiante", 41); ?>], {
                    balloonContent: '<?php the_field("map_text", 41) ?>',
                    iconContent: '<?php the_field("icon_sontent", 41) ?>',
                    hintContent: '<?php the_field("hint_Content", 41)?>',
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

        window.addEventListener('scroll', function() {
            if (!twoIndex) {
                downloadJSAtOnload();
                twoIndex = true;
            }
        });
    </script>

<?php
    get_footer();
?>
