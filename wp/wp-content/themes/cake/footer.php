




    <div class="footer">
        <div class="footer__container">
            <div class="footer__content">
                <ul class="footer__list footer__first">
                <?php 
                        wp_nav_menu( [
                            'theme_location'  => '',
                            'menu'            => 'main_footer_left', 
                            'container'       => '',  
                            'echo'            => true,
                            'items_wrap'      => '%3$s',
                            'depth'           => 1,
                            'walker'          => '',
                        ] );
                    ?>
                </ul>
               <div class="footer__logo">
                    <a href="<?php the_field('vk_url') ?>">
                        <img  data-src="<?php echo bloginfo("template_url") ?>/assets/images/static/white_vk.png" alt="vk" class="footer__vk network lazyload">
                    </a>
                   <a href="<?php echo get_home_url(); ?>" class="footer__logo-link">
                        <img src="<?php the_field("footer_logo",41); ?>" alt="logo" class="footer__logo-img">
                   </a>
                   <a href="<?php the_field('inst_url') ?>">
                        <img src="<?php echo bloginfo("template_url") ?>/assets/images/static/white_instagram.png" alt="instagram" class="footer__instagram network">
                    </a>
               </div>
                <ul class="footer__list footer__second">

                    <?php 
                        wp_nav_menu( [
                            'theme_location'  => '',
                            'menu'            => 'main_footer_right', 
                            'container'       => '',  
                            'echo'            => true,
                            'items_wrap'      => '%3$s',
                            'depth'           => 1,
                            'walker'          => '',
                        ] );
                    ?>
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