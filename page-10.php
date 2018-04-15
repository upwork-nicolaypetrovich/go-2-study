<?php get_header(); ?>
<?php the_post(); ?>

            <div class="mu_content">
                <div class="mu_how_to_enter_content">
                    <div class="mu_unter">
                        <p class="mu_enter_wr">
                            <span><img src="<?=get_template_directory_uri()?>/images/enter.png" class="mu_enter_img" alt="enter"></span>
                            <span class="mu_select_univer_txt">КАК ПОСТУПИТЬ В ПОЛЬШУ</span>
                        </p>
                    </div>
                    <div class="mu_enter_top_block">
                        <img src="<?=get_template_directory_uri()?>/images/hat3.png" class="mu_enter_hat3" alt="hat">
                        <div class="mu_enter_top_block_item">
                            <p class="mu_enter_img"><img src="<?=get_template_directory_uri()?>/images/enter_img_1.png" alt="img"></p>
                            <p class="mu_enter_txt"><?=get_post_meta( get_the_ID(), 'how_s1', true )?></p>
                        </div>
                        <div class="mu_enter_top_block_item">
                            <p class="mu_enter_img"><img src="<?=get_template_directory_uri()?>/images/enter_img_2.png" alt="img"></p>
                            <p class="mu_enter_txt"><?=get_post_meta( get_the_ID(), 'how_s2', true )?></p>
                        </div>
                        <div class="mu_enter_top_block_item">
                            <p class="mu_enter_img"><img src="<?=get_template_directory_uri()?>/images/enter_img_3.png" alt="img"></p>
                            <p class="mu_enter_txt"><?=get_post_meta( get_the_ID(), 'how_s3', true )?></p>
                        </div>
                    </div>
                    <div class="mu_enter_txt1"><?php the_content(); ?></div>
                    <div class="mu_enter_con_wr">
                        <div class="mu_enter_con">
                            <div class="mu_enter_con_block_wr">
                                <div class="mu_enter_con_block_wr2">
                                    <p class="mu_enter_p">
                                        <img src="<?=get_template_directory_uri()?>/images/img001.png" class="mu_enter_img2" alt="img">
                                        <span class="mu_enter_txt2">Свяжитесь с нами</span>
                                    </p>
                                    <p class="mu_enter_p2"><?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'how_contact', true ))?></p>
                                </div>
                            </div>
                            <div class="mu_enter_con_block_wr">
                                <div class="mu_enter_con_block_wr2">
                                    <p class="mu_enter_p">
                                        <img src="<?=get_template_directory_uri()?>/images/img002.png" class="mu_enter_img2" alt="img">
                                        <span class="mu_enter_txt2">Получите консультацию</span>
                                    </p>
                                    <p class="mu_enter_p2"><?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'how_consolt', true ))?></p>
                                </div>
                            </div>
                            <div class="mu_enter_con_block_wr">
                                <div class="mu_enter_con_block_wr2">
                                    <p class="mu_enter_p">
                                        <img src="<?=get_template_directory_uri()?>/images/img003.png" class="mu_enter_img2" alt="img">
                                        <span class="mu_enter_txt2">Выберите университет</span>
                                    </p>
                                    <p class="mu_enter_p2"><?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'how_select', true ))?></p>
                                </div>
                            </div>
                            <div class="mu_enter_con_block_wr">
                                <div class="mu_enter_con_block_wr2">
                                    <p class="mu_enter_p">
                                        <img src="<?=get_template_directory_uri()?>/images/img004.png" class="mu_enter_img2" alt="img">
                                        <span class="mu_enter_txt2">Предоставьте пакет документов</span>
                                    </p>
                                    <p class="mu_enter_p2"><?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'how_docs', true ))?></p>
                                </div>
                            </div>
                            <div class="mu_enter_con_block_wr">
                                <div class="mu_enter_con_block_wr2">
                                    <p class="mu_enter_p">
                                        <img src="<?=get_template_directory_uri()?>/images/img005.png" class="mu_enter_img2" alt="img">
                                        <span class="mu_enter_txt2">Готовьтесь к поездке</span>
                                    </p>
                                    <p class="mu_enter_p2"><?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'how_trevel', true ))?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mu_doc">
                        <div class="mu_doc_1">
                            <span class="mu_doc_title">Первая часть документов:</span>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>1</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_trev1', true )?></p>
                            </div>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>2</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_trev2', true )?></p>
                            </div>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>3</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_trev3', true )?></p>
                            </div>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>4</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_trev4', true )?></p>
                            </div>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>5</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_trev5', true )?></p>
                            </div>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>6</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_trev6', true )?></p>
                            </div>
                        </div>
                        <div class="mu_doc_2">
                            <span class="mu_doc_title">Вторая часть документов:</span>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>1</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_docs21', true )?></p>
                            </div>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>2</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_docs22', true )?></p>
                            </div>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>3</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_docs23', true )?></p>
                            </div>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>4</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_docs24', true )?></p>
                            </div>
                            <div class="mu_doc_item">
                                <div class="mu_stage_item_num"><p>5</p></div>
                                <p class="mu_stage_item_p"><?=get_post_meta( get_the_ID(), 'how_docs25', true )?></p>
                            </div>
                        </div>
                    </div>
                </div>  




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