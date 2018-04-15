<?php get_header(); ?>

            <div class="mu_content">
                <div class="mu_answer_content">
                    <div class="mu_unter">
                        <p class="mu_enter_wr">
                            <span><img src="<?=get_template_directory_uri()?>/images/questions.png" class="mu_questions_img" alt="questions"></span>
                            <span class="mu_questions_txt">УЧЕБА В ПОЛЬШЕ</span>
                        </p>
                    </div>
                    
                    <div class="mu_questions_con_wr">

                        <?php $query = new WP_Query( 'cat=50' );
                            foreach ($query->posts as $value) {
                            if(!$value->post_excerpt) $value->post_excerpt=$value->post_content;
                            ?>
                            <div class="mu_answer_item">
                                <div class="mu_answer_txt">
                                    <span class="mu_answer_date"><?php echo date('j F Y', mktime($value->post_date)); ?></span>
                                    <span class="mu_answer_title"><?=$value->post_title?></span>
                                    <p><?=$value->post_excerpt?></p>
                                    <a href="<?php the_permalink($value->ID);?>" class="mu_answer_more">
                                        <span>Подробнее</span>
                                        <img src="<?=get_template_directory_uri()?>/images/more_btn.png" alt="more_btn">
                                    </a>
                                </div>
                                <div class="mu_answer_img">
                                    <img src="<?=get_the_post_thumbnail_url( $value->ID, 'learning_thumbs' )?>">
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <div class="mu_answer_item">
                                <div class="mu_answer_txt">
                                    <span class="mu_answer_date"><?php the_date( 'j F Y' ); ?></span>
                                    <span class="mu_answer_title"><?php the_title(); ?></span>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="mu_answer_more">
                                        <span>Подробнее</span>
                                        <img src="<?=get_template_directory_uri()?>/images/more_btn.png" alt="more_btn">
                                    </a>
                                </div>
                                <div class="mu_answer_img">
                                    <img src="<?php the_post_thumbnail_url( 'learning_thumbs' ); ?>">
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
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