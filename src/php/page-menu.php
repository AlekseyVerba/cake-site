<?php
    // Template Name: Меню
?>

<?php
    get_header();
                        // global $query;
?>
    <div class="infoTorts program">
        <div class="container">
            <div class="infoTorts program">
                <h1 class="infoTorts__title title__adapt program__title-adapt title-animate">
                    Меню
                </h1>
                <div class="infoTorts__bread infoTorts__bread-aniamte">

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

   <div class="menu">
        <div class="menu__container">
            <div class="menu__content">
                <h3 class="menu__menu">
                    Меню кафе
                </h3>
                <ul class="menu__list">
                <?php            
                                    $categories = get_terms('category_menu', 'orderby=name&hide_empty=0');                

                                    if( $categories ): 
                                        foreach( $categories as $cat ): 
                                        $term_link = get_term_link($cat->term_id, "category_menu");

                                        ?>
                                        <li class="menu__item">
                                            <a href="<?= $term_link;?>" class="menu__item-link">
                                                <?= $cat->name;?>
                                            </a>
                                        </li>
                                            <!-- <a href="<?= $cat->slug;?>" class="filter__link">
                                                <?= $cat->name;?>
                                            </a> -->
                                        <?php endforeach;
                                    endif;?>

                </ul>
                <div class="menu__foods menu__foods-animate">
                <?php 
                    $query = new WP_Query( array(
                        'post_type' => array( 'menu' ),
                        'posts_per_page'   => 4, 
                    ));
                ?>
                <?php if ($query->have_posts()) : ?>
                    <?php
                    while ($query->have_posts()) : $query->the_post();

                        ?>
                            <a href="<?php echo get_permalink(); ?>" class="tort__item tort-hit food__click">
                            <div class="tort__head menu__head">
                                <div class="tort__dark">
                                    <p class="tort__order">Подробнее</p>
                                </div>
                                <div class="tort__img-block">
                                    <!-- <img src="<?php the_field("img_tovar"); ?>" alt="tort" class="tort__img"> -->
                                    <?php
                                        $per=get_field("img_tovar");
                                        if ($per) {
                                            ?>
                                                <picture>
                                                    <source srcset="<?php echo $per["sizes"]["thumbnail"] ?>" media="(max-width: 450px)">
                                                    <source srcset="<?php echo $per["sizes"]["medium"] ?>" media="(max-width: 768px)">
                                                    <img src="<?php echo $per["url"] ?>" alt="item" class="lazyload"/>
                                                </picture>
                                            <?php
                                        } else {
                                            $perTwo = get_field("no_found", 41);
                                            ?>
                                                <picture>
                                                    <source srcset="<?php echo $perTwo["sizes"]["thumbnail"] ?>" media="(max-width: 450px)">
                                                    <source srcset="<?php echo $perTwo["sizes"]["medium"] ?>" media="(max-width: 768px)">
                                                    <img src="<?php echo $perTwo["url"] ?>" alt="item" class="lazyload"/>
                                                </picture>

                                            <?php
                                        }
                                    
                                    ?>
                                </div>
                            </div>
                            <div class="tort__footer">
                                <div class="tort__footer-head">
                                    <h4 class="tort__title">
                                        <?php the_title() ?>
                                    </h4>
                                    <?php 
                                        if (get_field("hit_tovar") == "yes") {
                                            ?>
                                                 <div class="tort__succes">ХИТ</div>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <p class="tort__description">
                                    <?php the_field("text_tovar") ?>
                                </p>
                                <div class="tort__bottom">
                                    <div class="tort__line"></div>
                                    <div class="tort__footer-footer">
                                        <span class="tort__footer-gram"><?php the_field("gram_tovar") ?> г.</span>
                                        <span class="tort__footer-price"><?php the_field("price_tovar")  ?> р</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                        


                    endwhile;
                    ?>
                    <!-- <h1>fsdf</h1> -->

                    <?php if (  $query->max_num_pages > 1 ) : ?>
                        <script id="true_loadmore">
                        var true_posts = '<?php echo serialize($query->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_pages = <?php echo $query->max_num_pages ?>
                        </script>
                    <?php endif; ?>
                    
                    <!-- ?> -->
                <?php endif; ?>
                        <div class="tort__loading menu__loading">
                            <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/loading.png" alt="loading">
                        </div>
                </div>
            </div>
        </div>
    </div>

<?php
    get_footer();
?>