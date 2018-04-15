<?php get_header(); ?>

            <div class="mu_content">
                <div class="mu_how">
                    <img src="<?=get_template_directory_uri()?>/images/girl.png" alt="girl" class="mu_girl">
                    <div class="mu_how-enter">
                        <h6>КАК ПОСТУПИТЬ<br>В ПОЛЬСКИЙ ВУЗ?</h6>
                        <span></span>
                        <p>Всего 5 простых шагов</p>
                    </div>
                    <div class="mu_how_enter">
                        <div class="mu_step mu_step1">
                            <div class="mu_step_wrap">
                                <div class="mu_step_img_wrap">
                                    <div class="mu_step_img-wrap">
                                        <img src="<?=get_template_directory_uri()?>/images/step_img1.png" alt="step" class="mu_step">
                                    </div>
                                </div>
                                <h4><?php echo get_theme_mod('step1h', '');?></h4>
                                <p><?php echo get_theme_mod('step1t', '');?></p>
                            </div>
                            <img src="<?=get_template_directory_uri()?>/images/arr_img1.png" class="mu_arr" alt="arrow">
                            <span class="number_step active">1</span>
                        </div>
                        <div class="mu_step mu_step2">
                            <div class="mu_step_wrap">
                                <div class="mu_step_img_wrap">
                                    <div class="mu_step_img-wrap">
                                        <img src="<?=get_template_directory_uri()?>/images/step_img2.png" alt="step" class="mu_step">
                                    </div>
                                </div>
                                <h4><?php echo get_theme_mod('step3h', '');?></h4>
                                <p><?php echo get_theme_mod('step3t', '');?></p>
                            </div>
                            <img src="<?=get_template_directory_uri()?>/images/arr_img1.png" class="mu_arr" alt="arrow">
                            <span class="number_step">3</span>
                        </div>
                        <div class="mu_step mu_step3">
                            <div class="mu_step_wrap">
                                <div class="mu_step_img_wrap">
                                    <div class="mu_step_img-wrap">
                                        <img src="<?=get_template_directory_uri()?>/images/step_img3.png" alt="step" class="mu_step">
                                    </div>
                                </div>
                                <h4><?php echo get_theme_mod('step5h', '');?></h4>
                                <p><?php echo get_theme_mod('step5t', '');?></p>
                            </div>
                            <span class="number_step">5</span>
                        </div>
                        <div class="mu_step mu_step4">
                            <div class="mu_step_wrap">
                                <div class="mu_step_img_wrap">
                                    <div class="mu_step_img-wrap">
                                        <img src="<?=get_template_directory_uri()?>/images/step_img4.png" alt="step" class="mu_step">
                                    </div>
                                </div>
                                <h4><?php echo get_theme_mod('step2h', '');?></h4>
                                <p><?php echo get_theme_mod('step2t', '');?></p>
                            </div>
                            <img src="<?=get_template_directory_uri()?>/images/arr_img2.png" class="mu_arr mu_arr_top" alt="arrow">
                            <span class="number_step">2</span>
                        </div>
                        <div class="mu_step mu_step5">
                            <div class="mu_step_wrap">
                                <div class="mu_step_img_wrap">
                                    <div class="mu_step_img-wrap">
                                        <img src="<?=get_template_directory_uri()?>/images/step_img5.png" alt="step" class="mu_step">
                                    </div>
                                </div>
                                <h4><?php echo get_theme_mod('step4h', '');?></h4>
                                <p><?php echo get_theme_mod('step4t', '');?></p>
                            </div>
                            <img src="<?=get_template_directory_uri()?>/images/arr_img2.png" class="mu_arr mu_arr_top" alt="arrow">
                            <span class="number_step">4</span>
                        </div>
                    </div>
                </div>
                <div class="mu_our_advantages_wrap">
                    <div class="mu_our_advantages">
                        <h2>НАШИ ПРЕИМУЩЕСТВА</h2>
                        <p>Почему стоит обратиться к нам</p>
                        <div class="mu_our_advantages_list">
                            <div class="mu_advantages_list mu_advantages_list_1">
                                <div class="mu_list_img">
                                    <img src="<?=get_template_directory_uri()?>/images/list_img_1.png" alt="list_img_1">
                                </div>
                                <div class="mu_list_txt"><?php echo get_theme_mod('advantage1', '');?></div>
                            </div>
                            <div class="mu_advantages_list mu_advantages_list_1">                                
                                <div class="mu_list_txt"><?php echo get_theme_mod('advantage2', '');?></div>
                                <div class="mu_list_img">
                                    <img src="<?=get_template_directory_uri()?>/images/list_img_2.png" alt="list_img_2">
                                </div>
                            </div>
                            <div class="mu_advantages_list mu_advantages_list_1">
                                <div class="mu_list_img">
                                    <img src="<?=get_template_directory_uri()?>/images/list_img_3.png" alt="list_img_3">
                                </div>
                                <div class="mu_list_txt"><?php echo get_theme_mod('advantage3', '');?></div>
                            </div>
                            <div class="mu_advantages_list mu_advantages_list_1">                                
                                <div class="mu_list_txt"><?php echo get_theme_mod('advantage4', '');?></div>
                                <div class="mu_list_img">
                                    <img src="<?=get_template_directory_uri()?>/images/list_img_4.png" alt="list_img_4">
                                </div>
                            </div>
                            <div class="mu_advantages_list mu_advantages_list_1">
                                <div class="mu_list_img">
                                    <img src="<?=get_template_directory_uri()?>/images/list_img_5.png" alt="list_img_5">
                                </div>
                                <div class="mu_list_txt"><?php echo get_theme_mod('advantage5', '');?></div>
                            </div>
                            
                        </div>
                    </div>

                </div>
                <div class="mu_review">
                    <img src="<?=get_template_directory_uri()?>/images/hat.png" alt="hat" class="mu_hat">
                    <h2>ОТЗЫВЫ НАШИХ СТУДЕНТОВ</h2>
                    <a href="<?php echo get_category_link(9);?>" class="mu_all_reviews">Все отзывы</a>
                    <p>Которые уже учатся в Польше</p>
                    <div class="mu_review_wrap">
                            <?php $query = new WP_Query( array( 'cat' => 9, 'posts_per_page' => 3 ) );
                            foreach ($query->posts as $value) { //print_r($value->post_date);?>
                                <div class="mu_review_item">
                                    <div class="mu_review_item_img">
                                        <img src="<?=get_the_post_thumbnail_url( $value->ID, 'review_thumbnail' )?>" alt="review_img">
                                    </div>
                                    <div class="mu_review_item_txt">
                                        <p class="mu_review_top">
                                            <span class="mu_review_name"><?=$value->post_title ?></span>
                                            <span class="mu_review_date"><?php echo date('j.m.Y', strtotime($value->post_date)); ?></span>
                                        </p>
                                        <?=$value->post_content ?>
                                    </div>
                                </div>
                            <?php } ?>
                    </div>
                    <div class="mu_consult">
                        <p>------ Есть вопросы? ------</p>
                        <p>
                            <span class="mu_consult_popub">
                                ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ
                            </span>
                        </p>
                    </div>
                    <div class="mu_study_top">
                    
                    </div>
                </div>

                <div class="mu_study">
                    <img src="<?=get_template_directory_uri()?>/images/mu_book.png" class="mu_book" alt="book">
                    <img src="<?=get_template_directory_uri()?>/images/hat2.png" class="hat2" alt="hat">
                    <h2><span>---------------</span>УЧЕБА В ПОЛЬШЕ<span>---------------</span></h2>
                    <div class="mu_study_txt_wrap">
                        <div class="mu_study_txt_col_1">
                            <p><?php echo get_theme_mod('mtext1', '');?></p>
                            <p><?php echo get_theme_mod('mtext2', '');?></p>
                        </div>
                        <div class="mu_study_txt_col_2">
                            <p><?php echo get_theme_mod('mtext3', '');?></p>
                            <p><?php echo get_theme_mod('mtext4', '');?></p>
                        </div>
                    </div>
                </div>

            </div>

            <?php get_footer(); ?>
