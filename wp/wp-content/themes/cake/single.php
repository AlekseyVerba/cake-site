<?php get_header(); ?>

<div class="infoTorts program">
        <div class="container">
            <div class="infoTorts program">
                <h1 class="infoTorts__title title__adapt program__title-adapt title-animate">
                    <?php the_title(); ?>
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
            <div class="program__wrapper item__goHome">
                <a href="<?php echo get_home_url(); ?>" class="infoTorts__goHome program__goHome">
                    назад на главную
                </a>
            </div>
            <div class="menu__content">
                <h3 class="menu__menu">
                    Меню кафе
                </h3>
                <ul class="menu__list">


                <?php            
                                    // $term_title = single_term_title('', 0);
                                    // print_r(get_the_terms());
                                    $cat_slug= "";
                                    $categories = get_terms('category_menu', 'orderby=name&hide_empty=0');     
                                    
                                    $cur_terms = get_the_terms( $post->ID, 'category_menu' );

                                    if( $categories ): 
                                        foreach( $categories as $cat ): 
                                            $class = "menu__item-link";
                                            if ($term_title === $cat -> name || $cur_terms[0] -> slug === $cat -> slug) {
                                                $cat_slug = $cat -> slug;
                                                $class = "menu__item-link menu__item-link-active";
                                            }
                                            
                                        $term_link = get_term_link($cat->term_id, "category_menu");

                                        ?>
                                        <li class="menu__item">
                                            <a href="<?= $term_link;?>" class="<?php echo $class; ?>">
                                                <?= $cat->name;?>
                                            </a>
                                        </li>
                                        <?php endforeach;
                                    endif;?>


                </ul>
                <div class="menu__foods menu__foods-animate">
                        <div class="item__food">
                            <div class="item__food-img">
                                <?php
                                        $per=get_field("img_tovar");
                                        if ($per) {
                                            ?>
                                                <picture>
                                                    <source srcset="<?php echo $per["sizes"]["thumbnail"] ?>" media="(max-width: 450px)">
                                                    <source srcset="<?php echo $per["sizes"]["medium"] ?>" media="(max-width: 768px)">
                                                    <img src="<?php echo $per["url"] ?>" alt="item"  class="lazyload"/>
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
                            <div class="item__food-info">
                                <p class="item__food-text">
                                    <?php the_field("text_tovar"); ?>
                                </p>
                                <div class="item__food-info-footer">
                                    <div class="item__food-info-gram"><?php the_field("gram_tovar") ?> г.</div>
                                    <div class="item__food-info-price"><?php the_field("price_tovar") ?> ₽</div>
                                </div>
                            </div>
                        </div>

                        <h3 class="title__recomend">Рекомендуем</h3>
                        <?php 
                    $query = new WP_Query( array(
                        'post_type' => array( 'menu' ),
                        'orderby' => "rand",
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
                                    <?php
                                        $per=get_field("img_tovar");
                                        if ($per) {
                                            ?>
                                                <picture>
                                                    <source srcset="<?php echo $per["sizes"]["thumbnail"] ?>" media="(max-width: 450px)">
                                                    <source srcset="<?php echo $per["sizes"]["medium"] ?>" media="(max-width: 768px)">
                                                    <img src="<?php echo $per["url"] ?>" alt="item" />
                                                </picture>
                                            <?php
                                        } else {
                                            $perTwo = get_field("no_found", 41);
                                            ?>
                                                <picture>
                                                    <source srcset="<?php echo $perTwo["sizes"]["thumbnail"] ?>" media="(max-width: 450px)">
                                                    <source srcset="<?php echo $perTwo["sizes"]["medium"] ?>" media="(max-width: 768px)">
                                                    <img src="<?php echo $perTwo["url"] ?>" alt="item" />
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
                                        if (get_field("hit_tovar") === "yes") {
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

                    
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>