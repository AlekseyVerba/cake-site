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
                    <a href="#" class="infoTorts__home">Главная</a>
                    <span class="infoTorts__next">Торты на заказ</span>
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
                    <div class="tort__item tort__click" data-img="<?php echo bloginfo("template_url") ?>/assets/images/static/redTort.png" data-name-tort="Красный бархат"
                    data-description="Нежный бисквит пропитанный малиновым вареньем в сочетании со
                    сливочным сыром ." data-kg="1" data-rub="999"
                    >
                        <div class="tort__head">
                            <div class="tort__dark">
                                <p class="tort__order">Заказать</p>
                            </div>
                            <div class="tort__img-block">
                                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/redTort.png" alt="tort" class="tort__img">
                            </div>
                        </div>
                        <div class="tort__footer">
                            <div class="tort__footer-head">
                                <h4 class="tort__title">
                                    Красный бархат
                                </h4>
                                <div class="tort__succes">ХИТ</div>
                            </div>
                            <p class="tort__description">
                                Нежный бисквит пропитанный малиновым вареньем в сочетании со
                                сливочным сыром .
                            </p>
                            <div class="tort__bottom">
                                <div class="tort__line"></div>
                                <div class="tort__footer-footer">
                                    <span class="tort__footer-gram">1 кг.</span>
                                    <span class="tort__footer-price">999 ₽</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tort__item tort__click tort-hit" data-img="<?php echo bloginfo("template_url") ?>/assets/images/static/three-chocko.png" data-name-tort="Три Шоколада"
                    data-description="Муссовый торт из трех видов бельгийского шоколада" data-kg="1" data-rub="999">
                        <div class="tort__head">
                            <div class="tort__dark">
                                <p class="tort__order">Заказать</p>
                            </div>
                            <div class="tort__img-block">
                                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/three-chocko.png" alt="tort" class="tort__img">
                            </div>
                        </div>
                        <div class="tort__footer">
                            <div class="tort__footer-head">
                                <h4 class="tort__title">
                                    Три Шоколада
                                </h4>
                                <div class="tort__succes">ХИТ</div>
                            </div>
                            <p class="tort__description">
                                Муссовый торт из трех видов бельгийского шоколада
                            </p>
                            <div class="tort__bottom">
                                <div class="tort__line"></div>
                                <div class="tort__footer-footer">
                                    <span class="tort__footer-gram">1 кг.</span>
                                    <span class="tort__footer-price">999 ₽</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tort__item tort-hit tort__click"  data-img="<?php echo bloginfo("template_url") ?>/assets/images/static/snikers.png" data-name-tort="Сникерс"
                    data-description="Шоколадный бисквит с обжаренным арахисом, домашней соленой карамелью и
                    сливочным кремом" data-kg="1" data-rub="999">
                        <div class="tort__head">
                            <div class="tort__dark">
                                <p class="tort__order">Заказать</p>
                            </div>
                            <div class="tort__img-block">
                                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/snikers.png" alt="tort" class="tort__img">
                            </div>
                        </div>
                        <div class="tort__footer">
                            <div class="tort__footer-head">
                                <h4 class="tort__title">
                                    Сникерс
                                </h4>
                                <div class="tort__succes">ХИТ</div>
                            </div>
                            <p class="tort__description">
                                Шоколадный бисквит с обжаренным арахисом, домашней соленой карамелью и
                                сливочным кремом
                            </p>
                            <div class="tort__bottom">
                                <div class="tort__line"></div>
                                <div class="tort__footer-footer">
                                    <span class="tort__footer-gram">1 кг.</span>
                                    <span class="tort__footer-price">999 ₽</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tort__item tort__click" data-img="<?php echo bloginfo("template_url") ?>/assets/images/static/napoleon.png" data-name-tort="Наполеон с заварным кремом"
                    data-description=" Девять хрустящих коржей с фирменным заварным кремом" data-kg="1" data-rub="999">
                        <div class="tort__head">
                            <div class="tort__dark">
                                <p class="tort__order">Заказать</p>
                            </div>
                            <div class="tort__img-block">
                                <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/napoleon.png" alt="tort" class="tort__img">
                            </div>
                        </div>
                        <div class="tort__footer">
                            <div class="tort__footer-head">
                                <h4 class="tort__title">
                                    Наполеон с заварным кремом
                                </h4>
                                <div class="tort__succes">ХИТ</div>
                            </div>
                            <p class="tort__description">
                                Девять хрустящих коржей с фирменным заварным кремом
                            </p>
                            <div class="tort__bottom">
                                <div class="tort__line"></div>
                                <div class="tort__footer-footer">
                                    <span class="tort__footer-gram">1 кг.</span>
                                    <span class="tort__footer-price">999 ₽</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tort__loading menu__loading all__loading">
                    <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/loading.png" alt="loading">
                    <!-- <div class="tort__loading-text">Подгрузка товаров, а это сам индикатор загрузки</div> -->
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