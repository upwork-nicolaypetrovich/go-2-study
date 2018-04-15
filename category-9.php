<?php get_header(); ?>

            <div class="mu_content">
                <div class="mu_answer_content">
                    <div class="mu_unter">
                        <p class="mu_enter_wr">
                            <span><img src="<?=get_template_directory_uri()?>/images/reviews.png" class="mu_reviews_img" alt="reviews"></span>
                            <span class="mu_reviews_txt">ОТЗЫВЫ СТУДЕНТОВ</span>
                        </p>
                    </div>
                    
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="mu_reviews_con_wr mu_reviews_con_wr2">
                                    <div class="mu_reviews_item">
                                        <div class="mu_reviews-item">
                                            <div class="mu_reviews_photo_wr">
                                                <img src="<?=get_template_directory_uri()?>/images/pencil.png" alt="pencil" class="mu_pencil">
                                                <div class="mu_reviews_img_wr4">
                                                    <div class="mu_reviews_img_wr">
                                                        <div class="mu_reviews_img_wr3">
                                                            <img src="<?php the_post_thumbnail_url( 'review_photo' ); ?>" class="mu_reviews_photo" alt="photo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="mu_reviews-txt mu_reviews-txt2 mu_reviews-txt3">
                                                <div class="mu_reviews-txt4">
                                                <span class="mu_reviews_name"><?php the_title(); ?></span>
                                                <p class="mu_reviews_p"><?php the_content(); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    
                    
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