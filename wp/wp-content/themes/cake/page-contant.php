

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
                    Контакты
                </h1>
                <div class="infoTorts__bread">
                    <a href="#" class="infoTorts__home">Главная</a>
                    <span class="infoTorts__next">Контакты</span>
                </div>
                <a href="#" class="infoTorts__goHome">
                    назад на главную
                </a>
            </div>
        </div>
    </div>
    <div class="adress">
        <div class="adress__container">
            <h2 class="adress__title">Иркутск, Карла Маркса, 26а</h2>
            <div class="adress__phone">
                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/circle-phone.png" alt="logo" class="adress__phone-img">
                <a href="#" class="adress__link-phone">+7 (3952) 76‒71‒99</a>
            </div>
            <div class="adress__network">
                <a href="#" class="adress__network-link">
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/circle-facebook.png" alt="icon" class="adress__network-img">
                </a>
                <a href="#" class="adress__network-link">
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/circle-vk.png" alt="icon" class="adress__network-img">
                </a>
                <a href="#" class="adress__network-link">
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/circle-instagram.png" alt="icon" class="adress__network-img">
                </a>
            </div>
        </div>
    </div>

    <div class="contact__map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab2453514367bee03152388ef7760e69f09e06395c72d93d379c726142a0079f7&amp;source=constructor" ></iframe>
    </div>

<?php
    get_footer();
?>
