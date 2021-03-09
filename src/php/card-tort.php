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