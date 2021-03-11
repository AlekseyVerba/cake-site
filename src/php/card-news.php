<a href="<?php echo get_permalink(); ?>" class="tort__item tort-hit food__click">
    <div class="tort__head menu__head">
        <div class="tort__dark">
            <p class="tort__order">Подробнее</p>
        </div>
        <div class="tort__img-block">
            <!-- <img src="<?php the_field("img_tovar"); ?>" alt="tort" class="tort__img"> -->
            <!-- <!-- <picture> -->
                <?php $per=get_field("img_tovar") ?>
                <source srcset="<?php echo $per["sizes"]["thumbnail"] ?>" media="(max-width: 450px)">
                <source srcset="<?php echo $per["sizes"]["medium"] ?>" media="(max-width: 768px)">
                <img src="<?php echo $per["url"] ?>" alt="item" class="lazyload"/>
            </picture>
            <!-- <?php $per=get_field("img_tovar") ?> -->
            <!-- <img 
            data-sizes="auto"
            data-src="<?php echo $per["sizes"]["medium"] ?>"
            data-srcset="<?php echo $per["sizes"]["thumbnail"] ?> 450w,
            <?php echo $per["sizes"]["medium"] ?> 768w" class="lazyload"
            /> -->
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