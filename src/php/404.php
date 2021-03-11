
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href=<?php the_field("favicon", 41); ?> sizes="32x32"/>
    <title>Ошибка</title>
    <link rel="preload" />
    <link rel="preload" href="assets/fonts/1440.ttf" as="font"/>
    <link rel="preload" href="assets/fonts/3976.ttf" as="font"/>
    <link rel="preload" href="assets/fonts/9622.ttf" as="font"/>
    <link rel="preload" href="assets/fonts/14078.ttf" as="font"/>
    <link rel="preload" href="assets/fonts/Lato-Regular.ttf" as="font"/>
    <?php wp_head(); ?>
</head>
<body>
<div class="error">
        <div class="error__container">
            <div class="error__title">
                <span class="error__title-one">4</span>
                <div class="error__img">
                    <img src="<?php bloginfo("template_url") ?>/assets/images/static/tarelka.png" alt="lazyload tarelka">
                </div>
                <span class="error__title-two">4</span>
            </div>
            <h1 class="error__descr">УПС страницу кто-то съел</h1>
            <a href="<?php echo get_home_url(); ?>" class="infoTorts__goHome program__goHome error__goHome">
                назад на главную
            </a>
            <div class="error__text">
                Но вы всегда можете связаться с нами по контактам ниже.
            </div>
        </div>
    </div>

    <div class="adress">
        <div class="adress__container">
            <h2 class="adress__title error__adress__title"><?php the_field("address_contact", 14) ?></h2>
            <div class="adress__phone error__adress__phone">
                <img src="<?php bloginfo("template_url") ?>/assets/images/static/circle-phone.png" alt="logo" class="adress__phone-img">
                <a href="tel:<?php the_field("phone_main", 41) ?>" class="adress__link-phone"><?php the_field("phone_main", 41) ?></a>
            </div>
            <div class="adress__network error__adress__network">
                <a href="<?php the_field("url_facebook", 41) ?>" class="adress__network-link">
                    <img src="<?php bloginfo("template_url") ?>/assets/images/static/circle-facebook.png" alt="icon" class="adress__network-img">
                </a>
                <a href="<?php the_field('vk_url', 41) ?>" class="adress__network-link">
                    <img src="<?php bloginfo("template_url") ?>/assets/images/static/circle-vk.png" alt="icon" class="adress__network-img">
                </a>
                <a href="<?php the_field('inst_url', 41) ?>" class="adress__network-link">
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/circle-instagram.png" alt="icon" class="adress__network-img">
                </a>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>

