        <footer class="site-footer">
            <section class="section-footer container">
                <div class="section-logo">
                    <h2 class="section-text">paseo aranjuez</h2>
                    <figure class="section-picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/paseo-logo.png" alt="" class="slogo">
                    </figure>
                </div>
                <div class="section-info">
                    <label for="">suscribete a nuestro boletin</label>
                    <form class="form" action="">
                        <input type="email" placeholder="Correo Electronico">
                        <button type="submit" >Enviar</button>
                    </form>
                </div>
                <div class="section-media">
                    <p class="section-media-text">resdes sociales</p>
                    <div class="icons">
                        <a href="#" class="footer__social">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons-media/logo-facebook.svg" alt="" class="footer__icon">
                        </a>
                        <a href="#" class="footer__social">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons-media/icon-twitter.svg" alt="" class="footer__icon">
                        </a>
                        <a href="#" class="footer__social">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons-media/logo-instagram.svg" alt="" class="footer__icon">
                        </a>
                        <a href="#" class="footer__social">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons-media/logo-youtube.svg" alt="" class="footer__icon">
                        </a>
                        <a href="#" class="footer__social">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons-media/logo-tiktok.svg" alt="" class="footer__icon">
                        </a>
                    </div>
                </div>
                <div class="section-copy">
                    <div class="section-flex">                      
                        <p>© <? echo date('Y'); ?> - <?php echo get_bloginfo(); ?> - Todos los derechos reservaddos - Desarrollado por El Mismo Viaje</p>
                        <div>                  
                            <?php
                            $args = array(
                            'theme_location' => 'menu-principal',
                            'container' => 'nav',
                            'container_class' => 'menu-principal'
                            );
                            wp_nav_menu($args);
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="final container">
                <p>© 2022 - PASEO ARANJUEZ - Todos los derechos reservaddos - Desarrollado por El Mismo Viaje</p>
                <div>
                    <p>PRIVACIAD DE DATOS</p>
                    <p>TERMINOS DE USO</p>
                    <p>NOSOTROS</p>
                </div>
            </section>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>