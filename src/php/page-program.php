
<?php
    // Template Name: Программа лояльности
?>

<?php
    get_header();
?>

<div class="infoTorts program">
        <div class="container">
            <div class="infoTorts program">
                <h1 class="infoTorts__title title__adapt program__title-adapt">
                    <?php the_title(); ?>
                </h1>
                <div class="infoTorts__bread">
                    <!-- <a href="#" class="infoTorts__home">Главная</a>
                    <span class="infoTorts__next">Программа лояльности</span> -->
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="program__wrapper">
        <a href="<?php echo get_home_url(); ?>" class="infoTorts__goHome program__goHome">
            назад на главную
        </a>
    </div>
    <div class="program__bigImg">
        <picture>
            <?php $per=get_field("img_program"); ?>
            <source srcset="<?php echo $per["sizes"]["medium"] ?>" media="(max-width: 300px)">
            <source srcset="<?php echo $per["sizes"]["medium_large"] ?>" media="(max-width: 768px)">
            <img src="<?php echo $per["url"] ?>" alt="item" class="lazyload" />
        </picture>
    </div>
    <div class="description program">
        <div class="container">
            <div class="description__text">
               <?php the_field("descr_program"); ?>
            </div>
        </div>
    </div>
    <div class="program__description">
        <p class="program__text">
            <?php the_field("text_program"); ?>
        </p>
    </div>
    <div class="programLoyal">
        <div class="programLoyal__container">
            <div class="programLoyal__items">
                <?php

                $rows = get_field('bonus');
                if($rows)
                {
                    $key = 0;
                    $class;

                        foreach($rows as $key => $row) {
                            if ($key === 0) {
                                $class = "programLoyal__item-one";
                            }
                            if ($key === 1) {
                                $class = "programLoyal__item-two";
                            }
                            if ($key === 2) {
                                $class = "programLoyal__item-three";
                            }
                            if ($key === 3) {
                                $class = "programLoyal__item-four";
                            }

                            ?>
                                <div class="<?php echo $class ?> programLoyal__item">
                                    <div class="programLoyal__block">
                                        <img src="<?php echo $row['img_bonus'];  ?>" alt="sale" class="programLoyal__block-img">
                                    </div>
                                    <div class="programLoyal__description">
                                    <?php echo $row['text_bonus'];  ?>
                                    </div>
                                </div>
                            <?php
                            $key += 1;
                    }
                }

                ?>
            </div>
        </div>
    </div>
    <div class="question">
        <div class="question__container">
            <h6 class="question__title"><?php the_field("small_title") ?></h6>
            <p class="question__text"><?php the_field("text_beefore_bonus") ?> </p>
            <a href="<?php the_field("url_rule") ?>" class="question__right">​<?php the_field("rule_document") ?> </a>
        </div>
    </div>
    <div class="application">
        <div class="application__container">
            <h3 class="application__title"><?php the_field("title_form_program") ?></h3>
            <form class="application__form" action="application_fun">


                <?php

                // проверяем есть ли в повторителе данные
                if( have_rows('radio_knopki_programmy') ):

                    // перебираем данные
                    $key = 0;
                    $class;
                    $val;
                    while ( have_rows('radio_knopki_programmy') ) : the_row();

                        // отображаем вложенные поля
                        // the_sub_field('sub_field_name');
                        if ($key === 0) {
                            $class = "application__label-one";
                            $val = "Скидка на тортик";
                        }

                        if ($key === 1) {
                            $class = "application__label-two";
                            $val = "Скидка на кофе";
                        }

                        ?>
                        <label class="radio application__label <?php echo $class; ?>">
                            <img src="<?php the_sub_field('radio_img');?>" alt="page" />
                            <input type="radio" class="application__radio" name="choise" value="<?php echo $val ?>"/>
                            <div class="radio__text"><?php the_sub_field('radio_text'); ?></div>
                        </label>
                        <?php
                        $key += 1;

                    endwhile;

                else :

                    // вложенных полей не найдено

                endif;

                ?>


                <div class="cont">
                    <input type="text" class="application-input application__surname" name="surname" placeholder required>
                    <div class="placeholder">
                        Ваша фамилия
                        <span>*</span>
                    </div>
                </div>
                <div class="cont">
                    <input type="text" class="application-input application__name" name="name" placeholder required>
                    <div class="placeholder">
                        Ваше имя
                        <span>*</span>
                    </div>
                </div>
                <div class="cont">
                    <input type="text" class="application-input application__patronymic" name="patronymic" placeholder required>
                    <div class="placeholder">
                        Ваше отчество
                        <span>*</span>
                    </div>
                </div>
                <div class="cont">
                    <input type="text" class="application-input application__phone" name="phone" placeholder required>
                    <div class="placeholder">
                        Мобильный телефон
                        <span>*</span>
                    </div>
                </div>
                <div class="cont">
                    <input type="email" class="application-input application__email" name="email" placeholder required>
                    <div class="placeholder">
                        E-mail
                        <span>*</span>
                    </div>
                </div>
                <div class="application__opis">* Звездочкой отмечены поля, обязательные для заполнения.</div>
                <label class="checkbox application__label-checkbox">
                    <input type="checkbox" class="application-checkbox" name="sale"/>
                    <div class="checkbox__text">Согласен(а) на обработку моих персональных данных</div>
                </label>
                <button type="submit" class="application__submit modal__button modal__disabled" disabled="true">отправить заявку</button>
            </form>
        </div>
    </div>
 

<?php
    get_footer();
?>


<!-- application__submit modal__button modal__disabled -->
