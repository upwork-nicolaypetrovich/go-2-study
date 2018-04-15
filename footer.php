            <footer>
                <div class="footer">
                    <div class="footer_inf_wrap">
                        <div class="foot_col1">
                            <p>Сopyright 2017<br>Все права защищены</p>
                        </div>
                        <div class="foot_col2">
                            <div class="mu_hed_inf">
    <p class="mu_first_phone2"><?php echo get_theme_mod('phone1', '');?></p>
    <p class="mu_img_vib">
    <img src="<?=get_template_directory_uri()?>/images/viber2.png" alt="viber2">
    </p>
    <p class="mu_second_phone2"><?php echo get_theme_mod('phone2', '');?></p> 
                            </div>
                            <div class="mu_bott_inf">
    <div class="mu_skype">
        <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
        <a href="skype:<?php echo get_theme_mod('skype', '');?>"><?php echo get_theme_mod('skype', '');?></a>
    </div>
    <div class="mu_mail">
        <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
        <a href="mailto:<?php echo get_theme_mod('email', '');?>"><?php echo get_theme_mod('email', '');?></a>
    </div>
                            </div>
                        </div>
                        <div class="foot_col3">
                        <a href="/">
                            <img src="<?=get_template_directory_uri()?>/images/logo_foot.png" alt="logo_foot">
                        </a>
                        </div>
                    </div>
                </div>
                
            </footer>
        </div>


    
    <?php /*
    <!-- <script src="<?=get_template_directory_uri()?>/js/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> -->
    */ ?>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
    <script src="<?=get_template_directory_uri()?>/js/jquery.sumoselect.min.js"></script>
    <script type="text/javascript" src="<?=get_template_directory_uri()?>/slick/slick.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/js/js.js"></script>

    <?php wp_footer(); ?>
    </body>

</html>