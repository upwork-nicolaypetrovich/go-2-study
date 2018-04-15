<?php get_header(); ?>
<?php the_post(); ?>

            <div class="mu_content">
                <div class="mu_how_to_about_content">
                    <div class="mu_unter">
                        <p class="mu_enter_wr">
                            <span><img src="<?=get_template_directory_uri()?>/images/about.png" class="mu_about_img" alt="about"></span>
                            <span class="mu_select_univer_txt">О КОМПАНИИ</span>
                        </p>
                    </div>
                    
                    <div class="mu_about_con_wr">
                        <img src="<?=get_template_directory_uri()?>/images/hat3.png" class="mu_enter_hat3" alt="hat">
                        <div class="mu_about_con">
                            <div class="mu_about_con_block_wr">
                                <p class="mu_enter_p">
                                    <span class="mu_enter_txt2"><?=get_post_meta( get_the_ID(), 'about_title2', true )?></span>
                                </p>
                            </div>
                            <div class=""><?php the_content(); ?></div>
                        </div>
                    </div>
                    <div class="mu_about_con_wr">
                        <img src="<?=get_template_directory_uri()?>/images/book3.png" class="mu_enter_book4" alt="hat">
                        <div class="mu_about_con">
                            <div class="mu_about_con_block_wr">
                                <p class="mu_enter_p">
                                    <span class="mu_enter_txt2">10 причин, почему стоит выбрать нас</span>
                                </p>
                            </div>
                            <div class="mu_about_con_block_wr">
                                <div class="mu_doc mu_enter_con_block_wr2">
                                    <div class="mu_doc_1">
                                        <div class="mu_doc_item">
                                            <div class="mu_stage_item_num"><p>1</p></div>
                                            <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'about_r1', true )?></p>
                                        </div>
                                        <div class="mu_doc_item">
                                            <div class="mu_stage_item_num"><p>2</p></div>
                                            <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'about_r2', true )?></p>
                                        </div>
                                        <div class="mu_doc_item">
                                            <div class="mu_stage_item_num"><p>3</p></div>
                                            <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'about_r3', true )?></p>
                                        </div>
                                        <div class="mu_doc_item">
                                            <div class="mu_stage_item_num"><p>4</p></div>
                                            <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'about_r4', true )?></p>
                                        </div>
                                        <div class="mu_doc_item">
                                            <div class="mu_stage_item_num"><p>5</p></div>
                                            <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'about_r5', true )?></p>
                                        </div>
                                    </div>
                                    <div class="mu_doc_2">
                                        <div class="mu_doc_item">
                                            <div class="mu_stage_item_num"><p>6</p></div>
                                            <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'about_r6', true )?></p>
                                        </div>
                                        <div class="mu_doc_item">
                                            <div class="mu_stage_item_num"><p>7</p></div>
                                            <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'about_r7', true )?></p>
                                        </div>
                                        <div class="mu_doc_item">
                                            <div class="mu_stage_item_num"><p>8</p></div>
                                            <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'about_r8', true )?></p>
                                        </div>
                                        <div class="mu_doc_item">
                                            <div class="mu_stage_item_num"><p>9</p></div>
                                            <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'about_r9', true )?></p>
                                        </div>
                                        <div class="mu_doc_item">
                                            <div class="mu_stage_item_num"><p>10</p></div>
                                            <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'about_r10', true )?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php echo do_shortcode( '[nggallery id=1 template=certificate override_thumbnail_settings="1" thumbnail_width="120" thumbnail_height="170" thumbnail_crop="1"]' ); ?>




                <div class="mu_review">
                    <div class="mu_study_top">
                        
                    </div>
                </div>
                <div class="mu_study">
                    <img src="<?=get_template_directory_uri()?>/images/mu_book.png" class="mu_book" alt="book">
                    <img src="<?=get_template_directory_uri()?>/images/hat2.png" class="hat2" alt="hat">

                    <div class="mu_study_txt_wrap">
                        <div class="mu_consult mu_consult_internal">
                            <p>------ Есть вопросы? ------</p>
                            <p>
                                <span class="mu_consult_popub">
                                    ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ
                                </span>
                            </p>
                        </div>
                    </div>
                    
                </div>


            </div>
            
            <?php get_footer(); ?>