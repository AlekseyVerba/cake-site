<?php
    // Template Name: Торты
?>

<?php
    get_header();
?>

<div class="infoTorts">
        <div class="container">
            <div class="infoTorts">
                <h1 class="infoTorts__title">
                    <?php the_title(); ?>
                </h1>
                <div class="infoTorts__bread">
                    <!-- <a href="#" class="infoTorts__home">Главная</a>
                    <span class="infoTorts__next">Торты на заказ</span> -->
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </div>
                </div>
                <p class="infoTorts__text infoTorts__text-first infoTorts__text-two">
                   <?php the_field("tort_text_one") ?>
                </p>
                    <div class="infoTorts__br"></div>
                    <!-- <p class="infoTorts__text infoTorts__text-two">
                        Кондитерская udc кафе создает торты на заказ, капкейки и десерты, как настоящие произведения искусства, чтобы украсить праздничный стол и поднять настроение всем окружающим.
                    </p> -->
                <h6 class="infoTorts__text-bold"><?php the_field("tort_text_two_bold") ?></h6>
                <p class="infoTorts__text">
                    <?php the_field("tort_text_two") ?>
                </p>
            </div>
        </div>
    </div>
    <div class="tort">
        <div class="container">
            <div class="tort__content">
                <div class="tort__items">


                    <?php 
                        $query = new WP_Query( array(
                            'post_type' => array( 'celtorts' ),
                            'posts_per_page'   => 2, 
                        ));
                    ?>
                    <?php if ($query->have_posts()) : ?>
                        <?php
                        while ($query->have_posts()) : $query->the_post();

                            ?>
                            <div class="tort__item tort__click" data-img="<?php the_field("tort_img") ?>" data-name-tort="<?php the_title(); ?>"
                                data-description="<?php the_field("tort-text") ?>" data-kg="<?php the_field("tort_ves") ?>" data-rub="<?php the_field("tort_price") ?>"
                                >
                                <div class="tort__head">
                                    <div class="tort__dark">
                                        <p class="tort__order">Заказать</p>
                                    </div>
                                    <div class="tort__img-block">
                                        <img src="<?php the_field("tort_img") ?>" alt="tort" class="tort__img">
                                    </div>
                                </div>
                                <div class="tort__footer">
                                    <div class="tort__footer-head">
                                        <h4 class="tort__title">
                                            <?php the_title(); ?>
                                        </h4>
                                        <?php 
                                            if (get_field("tort_hit") === "yes") {
                                                ?>
                                                <div class="tort__succes">ХИТ</div>
                                                <?php
                                            }
                                        ?>

                                    </div>
                                    <p class="tort__description">
                                        <?php the_field("tort-text") ?>
                                    </p>
                                    <div class="tort__bottom">
                                        <div class="tort__line"></div>
                                        <div class="tort__footer-footer">
                                            <span class="tort__footer-gram"><?php the_field("tort_ves") ?> кг.</span>
                                            <span class="tort__footer-price"><?php the_field("tort_price") ?> ₽</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            


                        endwhile;
                        ?>

                        <?php
                        if (  $query->max_num_pages > 1 ) : ?>
                            <div class="tort__loading menu__loading">
                                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/loading.png" alt="loading">
                            </div>
                            <script id="true_loadmore">
                            // var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                            var true_posts = '<?php echo serialize($query->query_vars); ?>';
                            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                            var max_pages = <?php echo $query->max_num_pages ?>
                            </script>
                        <?php endif; ?>
                    <?php endif; ?>


                
                </div>
            </div>
        </div>
    </div>

    <div class="modal">
        <div class="modal__dialog">
            <div class="modal__content">
                <div class="modal__block"></div>
                <form class="modal__form">
                        <label  class="hidden__label"></label>
                        <input type="text" name="phone" class="modal__input" placeholder="Ваш телефон"/>
                        <textarea rows="9" name="comment" class="modal__area" placeholder="Комметарий к заказу"></textarea>
                        <label class="modal__label">
                            <input type="checkbox" name="check" class="modal__checkbox">
                            Согласен(а) на обработку моих персональных данных
                        </label>
                        <button type="submit" class="modal__button modal__disabled" disabled>отправить заявку</button>
                </form>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>