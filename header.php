<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    	<meta http-equiv="Content-Type" content="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=1280, maximum-scale=1.0">
        <title><?php wp_title();?></title>
        <link href="<?=get_template_directory_uri()?>/css/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="<?=get_template_directory_uri()?>/css/sumoselect.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/slick/slick.css"/>
        <link href="<?=get_template_directory_uri()?>/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view tre page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="mu_main_wrapper">
            <header>
                <div class="mu_menu_wrap">
                    <a class="mu_logo" href="/">
                        <img src="<?=get_template_directory_uri()?>/images/logo.png" alt="logo">
                    </a>
                    <nav>
                        <?php
                            $args = array(
                            'theme_location'  => 'top',
                            'menu'            => 'Top Menu',
                            'echo'            => true,
                            'menu_class'      => 'mu_menu',
                            'fallback_cb'     => 'wp_page_menu',
                            'depth'           => 0
                            );
                            wp_nav_menu(  $args  );
                        ?>
                    </nav>
                </div>
                <div class="mu_wrap_inf">
                    <div class="mu_hed_inf-wr">
                        <div class="mu_hed_inf">
                            <p class="mu_first_phone"><?php echo get_theme_mod('phone1', '');?></p>
                            <p class="mu_img_vib">
                                <img src="<?=get_template_directory_uri()?>/images/viber.png" alt="viber">
                            </p>
                            <p class="mu_second_phone"><?php echo get_theme_mod('phone2', '');?></p>                        
                        </div>
                        <div class="mu_skype">
                            <img src="<?=get_template_directory_uri()?>/images/skype.png" alt="skype">
                            <a href="skype:Skype_User"><?php echo get_theme_mod('skype', '');?></a>
                        </div>
                        <div class="mu_mail">
                            <img src="<?=get_template_directory_uri()?>/images/mail.png" alt="mail">
                            <a href="mailto:mail@mail.com"><?php echo get_theme_mod('email', '');?></a>
                        </div>
                    </div>
                    <div class="mu_consult">
                        <p>------ Есть вопросы? ------</p>
                        <p>
                            <span class="mu_consult_popub">
                                ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ
                            </span>
                        </p>
                    </div>
                </div>
                <div class="mu_bott-inf">
                    <div>
                        <span><?php echo get_theme_mod('headertext1', '');?></span> 
                    </div>
                    <div>
                        <span><?php echo get_theme_mod('headertext2', '');?></span> 
                    </div>
                </div>
                <img src="<?=get_template_directory_uri()?>/images/tape1.png" class="tape1" alt="tape">
                <img src="<?=get_template_directory_uri()?>/images/tape2.png" class="tape2" alt="tape">
                <div class="mu_paetners">
                    
                    <div class="mu-paetners">
                        <p><span>-------------------------</span>УНИВЕРСИТЕТЫ - ПАРТНЕРЫ<span>-------------------------</span></p>
                        <div class="mu_main_slider">
                            <?php $query = new WP_Query( 'cat=4' );
                            foreach ($query->posts as $value) { ?>
                                <a href="<?php the_permalink($value->ID);?>">
                                    <img src="<?=get_the_post_thumbnail_url( $value->ID, 'header_carusel' )?>">
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="mu_popub1_wrapper mu_hide">
                    <div class="mu_popub1">
                        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                            <input type="hidden" name="action" value="contact_form">
                            <span class="mu_popub_close"></span>
                            <div class="mu_popub1_block1">
                                <h2 class="mu_popub1_h2">ОТПРАВИТЬ ЗАПРОС</h2>
                                <input type="text" pattern="^[А-Яа-яЁё\s]+$" class="mu_input_name" name="name" placeholder="Ваше имя*" required>
                                <input type="email" class="mu_input_email" name="email" placeholder="E-mail*" required>
                                <textarea name="mass" class="mu_textarea_mass" placeholder="Ваше сообщение:*" required></textarea>
                            </div>
                            <div class="mu_popub1_block2">
                                <h2 class="mu_popub1_h2">ОТПРАВИТЬ ЗАПРОС</h2>
                                <input type="tel" name="tel" pattern="^[ 0-9]+$"    input type="text" class="mu_input_phone" name="phone" placeholder="Ваш телефон*" required>
                                <input type="text" class="mu_input_town" name="town" placeholder="Ваш город*" required>
                            </div>
                            <div class="mu_popub1_block3">
                                <h2 class="mu_popub1_h2">ИНФОРМАЦИОННАЯ ЛИНИЯ</h2>

                                <div class="mu_popub1_inf">
                                    <p class="mu_first_phone_popub"><?php echo get_theme_mod('phone1', '');?></p>
                                    <p class="mu_img_vib">
                                        <img src="<?=get_template_directory_uri()?>/images/viber.png" alt="viber">
                                    </p>
                                    <p class="mu_second_phone_popub"><?php echo get_theme_mod('phone2', '');?></p>
                                </div>
                                <div class="mu_popub1_inf2">
                                    <div class="mu_skype">
                                        <img src="<?=get_template_directory_uri()?>/images/skype.png" alt="skype">
                                        <a href="skype:<?php echo get_theme_mod('skype', '');?>">Skype <?php echo get_theme_mod('skype', '');?></a>
                                    </div>
                                    <div class="mu_mail">
                                        <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                        <a href="mailto:<?php echo get_theme_mod('email', '');?>"><?php echo get_theme_mod('email', '');?></a>
                                    </div>
                                </div>
                                <p>
                                    <input type="submit" class="mu_consult_popub2" value="ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ">
                                </p>
                            </div>
                        </form>

                    </div>
                </div>
                <?php if (isset($_SESSION['popup'])&&$_SESSION['popup']) { ?>
                <div class="mu_popub2_wrapper">
                    <div class="mu_popub2">
                        <span class="mu_popub_close2"></span>
                        <p>Спасибо, Ваш запрос отправлен</p>
                    </div>
                </div>
                <?php $_SESSION['popup']=false; } ?>
            </header>