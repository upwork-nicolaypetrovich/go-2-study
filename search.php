<?php get_header(); ?>

            <div class="mu_content">
                <div class="mu_internal_content">
                    <div class="mu_select_univer">
                        <p class="mu_select_univer_wr">
                            <span>------------------------</span>
                            <span><img src="<?=get_template_directory_uri()?>/images/select_univer_img.png" class="mu_univer_img" alt="univer"></span>
                            <span class="mu_select_univer_txt">ВЫБЕРИТЕ УНИВЕРСИТЕТ</span>
                            <span>------------------------</span>
                        </p>
                        <form method="get" class="main-search" id="search_form">
                            <div class="sumo_wr"> 
                                <span class="mu_poland">Польша</span>

                                <?php 
                                $args = array(
                                    'type'         => 'post',
                                    'child_of'     => 4,
                                    'parent'       => '',
                                    'orderby'      => 'name',
                                    'order'        => 'ASC',
                                    'hide_empty'   => 0,
                                    'hierarchical' => 1,
                                    'exclude'      => '',
                                    'include'      => '',
                                    'number'       => 0,
                                    'taxonomy'     => 'category',
                                    'pad_counts'   => false,
                                );
                                ?>
                                <select class="mu_select_2 mu_sel_internal SlectBox">
                                    <option value="<?=get_category_link(4)?>"">Все города</option>
                                    <?php foreach (get_categories( $args ) as $value) { ?>
                                    <option value="<?=get_category_link($value->term_id)?>"><?=$value->name?></option>
                                    <?php } ?>
                                </select>

                                <label class="mu_search_wr">
                                    <i class="fa fa-search" id="search_triger" aria-hidden="true"></i>
                                    <input type="text" class="mu_search_internal" name="s" placeholder="Поиск">
                                </label>                           
                            </div>
                        </form>
                    </div>

                        <?php if ( have_posts() ) { ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="mu_academy_item_wrap">
                                    <div class="mu_academy_img_wrap">
                                        <div class="mu_academy_img">
                                            <img src="<?php the_post_thumbnail_url( 'universitet_catolog' ); ?>" alt="academy_img">
                                        </div>
                                    </div>
                                    <div class="mu_academy_txt_wrap">
                                        <h5 class="mu_academy_txt_title"><?php the_title(); ?></h5>
                                        <div class="mu_academy_txt_top">
                                            <span class="mu_academy_txt_color">
                                            <?php foreach (get_the_category( get_the_ID() ) as $value) echo $value->name.', ';?>ПОЛЬША</span>
                                            <span><img src="<?=get_template_directory_uri()?>/images/point.png" alt="point" class="mu_point"></span>
                                            <span class="mu_cost">Стоимость обучения в год:</span>
                                            <span class="mu-cost"><?=get_post_meta( get_the_ID(), 'uni_price', true )?></span>
                                        </div>
                                        <div class="mu_academy_txt_content"><?php the_excerpt(); ?></div>
                                        <div class="mu_academy_txt_footer">
                                            <div class="mu_academy_txt_footer_list">
                                                <div><span>Популярные факультеты:</span></div>
                                                <div>
                                                    <span><img src="<?=get_template_directory_uri()?>/images/point.png" alt="point" class="mu_point">Туризм</span>
                                                    <span><img src="<?=get_template_directory_uri()?>/images/point.png" alt="point" class="mu_point">Английская филология</span>
                                                    <span><img src="<?=get_template_directory_uri()?>/images/point.png" alt="point" class="mu_point">Режиссура, кино, аудиовизуальное искусство</span>
                                                </div>
                                                <div>
                                                    <span><img src="<?=get_template_directory_uri()?>/images/point.png" alt="point" class="mu_point">Менеджмент</span>
                                                    <span><img src="<?=get_template_directory_uri()?>/images/point.png" alt="point" class="mu_point">Финансы и учет</span>
                                                    <span><img src="<?=get_template_directory_uri()?>/images/point.png" alt="point" class="mu_point">Социология бизнеса и СМИ</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="academy_txt_more">
                                            <a href="<?php the_permalink(); ?>">
                                                <span>Подробнее</span><img src="<?=get_template_directory_uri()?>/images/more_btn.png" alt="more_btn">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php }else{ ?>
                            <span class="search_defalt">
                            По вашему запросу ничего не найдено
                            </span>
                        <?php } ?>

                    <div class="mu_consult mu_consult_internal">
                        <p>------ Есть вопросы? ------</p>
                        <p>
                            <span class="mu_consult_popub">
                                ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ
                            </span>
                        </p>
                    </div>
                    
                    
                </div>
                <div class="mu_review">
                    <div class="mu_study_top">
                    </div>
                </div>
                <div class="mu_study">
                    <img src="<?=get_template_directory_uri()?>/images/mu_book.png" class="mu_book" alt="book">
                    <img src="<?=get_template_directory_uri()?>/images/hat2.png" class="hat2" alt="hat">
                    <h2><span>---------------</span>УЧЕБА В ПОЛЬШЕ<span>---------------</span></h2>
                    <div class="mu_study_txt_wrap mu_study_txt_wrap_col"><?php echo category_description( get_cat_ID("General") ); ?></div>
                </div>

            </div>

            <?php get_footer(); ?>