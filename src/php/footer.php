




    <div class="footer">
        <div class="footer__container">
            <div class="footer__content">
                <ul class="footer__list footer__first">
                    <li class="footer__item">
                        <a href="#" class="footer__link">Меню</a>
                        <div class="footer__line"></div>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Целые торты</a>
                        <div class="footer__line"></div>
                    </li>
                </ul>
               <div class="footer__logo">
                    <a href="<?php the_field("inst_url", 41) ?>">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/white_vk.png" alt="vk" class="footer__vk network">
                    </a>
                   <a href="<?php echo get_home_url() ?>" class="footer__logo-link" />
                     <img src="
                     <?php
                        $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                        // выводим
                        echo $custom_logo__url[0];                        
                     ?>
                     " alt="logo" class="footer__logo-img">
                   </a>
                   <a href="<?php the_field("inst_url", 41) ?>">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/white_instagram.png" alt="instagram" class="footer__instagram network">
                    </a>
               </div>
                <ul class="footer__list footer__second">
                    <li class="footer__item">
                        <a href="#" class="footer__link">Программа лояльности</a>
                        <div class="footer__line"></div>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Контакты</a>
                        <div class="footer__line"></div>
                    </li>
                </ul>
           </div>
           <p class="footer__developer">
                Разработка <span>true.code</span>
           </p>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>