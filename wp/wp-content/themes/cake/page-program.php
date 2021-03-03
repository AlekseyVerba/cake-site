
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
                    Программа лояльности
                </h1>
                <div class="infoTorts__bread">
                    <a href="#" class="infoTorts__home">Главная</a>
                    <span class="infoTorts__next">Программа лояльности</span>
                </div>
            </div>
        </div>
    </div>
    <div class="program__wrapper">
        <a href="#" class="infoTorts__goHome program__goHome">
            назад на главную
        </a>
    </div>
    <div class="program__bigImg">
        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/card.jpg" alt="img" class="program__bigImg-img">
    </div>
    <div class="description program">
        <div class="container">
            <div class="description__text">
                Карта Программы поощрения клиентов ЛУКОЙЛ предназначена для постоянных клиентов Компании, которые регулярно совершают покупки на АЗС и хотели бы делать это на более выгодных условиях.
            </div>
        </div>
    </div>
    <div class="program__description">
        <p class="program__text">
            Дежателям карты Программы поощрения клиентов ЛУКОЙЛ доступна классическая пластиковая карта и ее аналог — Виртуальная карта для использования с мобильного устройства.
        </p>
        <div class="program__br"></div>
        <p class="program__text">
            С картой Вы можете делать покупки на АЗС «ЛУКОЙЛ» со скидкой, используя накопленные баллы. За каждые 50 рублей, потраченные на покупку топлива и других товаров, Вы получаете 1 балл. Накопленные баллы можно использовать при следующих покупках по правилу: 1 балл = 1 рубль.
        </p>
    </div>
    <div class="programLoyal">
        <div class="programLoyal__container">
            <div class="programLoyal__items">
                <div class="programLoyal__item programLoyal__item-one">
                    <div class="programLoyal__block">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/sale.png" alt="sale" class="programLoyal__block-img">
                    </div>
                    <div class="programLoyal__description">
                        Скидки до 30%
                    </div>
                </div>
                <div class="programLoyal__item programLoyal__item-two">
                    <div class="programLoyal__block">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/coin.png" alt="sale" class="programLoyal__block-img">
                    </div>
                    <div class="programLoyal__description">
                        1 бонус = <br> 1 рубль
                    </div>
                </div>
                <div class="programLoyal__item programLoyal__item-three">
                    <div class="programLoyal__block">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/podarok.png" alt="sale" class="programLoyal__block-img">
                    </div>
                    <div class="programLoyal__description">
                        10% бонусов начисляется от суммы покупки
                    </div>
                </div>
                <div class="programLoyal__item programLoyal__item-four">
                    <div class="programLoyal__block">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/pig.png" alt="sale" class="programLoyal__block-img">
                    </div>
                    <div class="programLoyal__description">
                        3,1% бонусов возвращается на вашу карту от суммы любой покупки
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="question">
        <div class="question__container">
            <h6 class="question__title">Как получить карту?</h6>
            <p class="question__text">Для получения карты, достаточно совершить покупку в размере 1399 руб. </p>
            <a href="#" class="question__right">​Правила участия в Программе лояльности </a>
        </div>
    </div>
    <div class="application">
        <div class="application__container">
            <h3 class="application__title">Анкета программы лояльности</h3>
            <form class="application__form">
                <div class="application__label application__label-one">
                    <div class="application__checkbox-block"></div>
                    <input type="radio" name="choise" class="application__checkbox" value="saleOnTort"/>
                    Хочу скидку на тортики
                </div>
                <div class="application__label application__label-two">
                    <div class="application__checkbox-block"></div>
                    <input type="radio" name="choise" class="application__checkbox" value="saleOnCoffee"/>
                    Очень люблю кофе, хочу скидку
                </div>
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
                <div class="application__label-checkbox">
                    <div class="application__checkbox-bad-block"></div>
                    <input type="checkbox" name="check" class="application__checkbox-bad">
                    Согласен(а) на обработку моих персональных данных
                </div>
                <button type="submit" class="modal__button modal__disabled application__submit" disabled>отправить заявку</button>
            </form>
        </div>
    </div>
 

<?php
    get_footer();
?>
