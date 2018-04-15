<?php get_header(); ?>
<?php the_post(); ?>

            <div class="mu_content">
                <div class="mu_review_item_content">
                    <div class="mu_unter">
                        <p class="mu_enter_wr">
                            <span><img src="<?=get_template_directory_uri()?>/images/review_item.png" class="mu_about_img" alt="about"></span>
                            <span class="mu_select_univer_txt">УЧЕБА В ПОЛЬШЕ</span>
                        </p>
                    </div>
                    
                    <div class="mu_review_item_wr">
                        <div class="mu_about_con">
                            
                            <div class="mu_about_con_block_wr mu_review_item_wr">
                                <div class="mu_about_con_block_txt_wr mu_review_item_block_txt_wr">
                                    <div class="mu_review_item_block1">
                                        <span class="mu_review_item_date"><?php the_date( 'j F Y' ); ?></span>
                                        <span class="mu_review_item_title"><?php the_title(); ?></span>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
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