            <div class="mu_content">
                <div class="mu_review_item_content">
                    <div class="mu_unter">
                        <p class="mu_select_univer_wr">
                            <span><img src="<?=get_template_directory_uri()?>/images/select_univer_img.png" class="mu_univer_img" alt="univer"></span>
                            <span class="mu_select_univer_txt">ВЫБЕРИТЕ УНИВЕРСИТЕТ</span>
                        </p>
                    </div>
                    <div class="mu_facult">
                        <div class="mu_facult_img">
                            <div class="mu_facult_img_wr">
                                <img src="<?php the_post_thumbnail_url( 'universitet_photo' ); ?>" alt="facult">
                            </div>
                        </div>
                        <div class="mu_facult_txt">
                            <p class="mu_facult_title">
                                Факультеты
                            </p>
                            <div class="mu_facult_list">
                                <div class="mu_facult_col1">
                                    <?php if(get_post_meta( get_the_ID(), 'uf1', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'uf1', true )?></span><?php } ?>
                                    <?php if(get_post_meta( get_the_ID(), 'uf2', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'uf2', true )?></span><?php } ?>
                                    <?php if(get_post_meta( get_the_ID(), 'uf3', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'uf3', true )?></span><?php } ?>
                                    <?php if(get_post_meta( get_the_ID(), 'uf4', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'uf4', true )?></span><?php } ?>
                                </div>
                                <div class="mu_facult_col2">
                                    <?php if(get_post_meta( get_the_ID(), 'uf5', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'uf5', true )?></span><?php } ?>
                                    <?php if(get_post_meta( get_the_ID(), 'uf6', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'uf6', true )?></span><?php } ?>
                                    <?php if(get_post_meta( get_the_ID(), 'uf7', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'uf7', true )?></span><?php } ?>
                                </div>
                                <div class="mu_facult_col3">
                                    <?php if(get_post_meta( get_the_ID(), 'uf8', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'uf8', true )?></span><?php } ?>
                                    <?php if(get_post_meta( get_the_ID(), 'uf9', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'uf9', true )?></span><?php } ?>
                                    <?php if(get_post_meta( get_the_ID(), 'uf10', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'uf10', true )?></span><?php } ?>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    <div class="mu_univer_item_wr mu_univer_item-wr">
                        <div class="mu_about_con">
                            <img src="<?=get_template_directory_uri()?>/images/hat3.png" class="hat3" alt="hat">
                            
                            <div class="mu_about_con_block_wr mu_univer_item_wr">
                                <div class="mu-tab-wrap">
                                    <ul class="mu-tab-list">
                                        <li class="mu-active">
                                            <a href="#tab_1" class="mu-tab-link">Описание</a>
                                        </li>
                                        <li>
                                            <a href="#tab_2" class="mu-tab-link">Бакалаврат</a>
                                        </li>
                                        <li>
                                            <a href="#tab_3" class="mu-tab-link">Магистратура</a>
                                        </li>
                                        <li>
                                            <a href="#tab_4" class="mu-tab-link">Галерея</a>
                                        </li>                                    
                                    </ul>
                                    <div class="mu-box-tab-cont">
                                        <div class="mu-tab-cont" id="tab_1">
                                            <h3><?php the_title(); ?></h3>
                                            <div class="mu_univer_item_block-wr">
                                                <div class="mu_univer_item_block1"><?php the_content(); ?></div>
                                            </div>
                                            <div class="mu_fackts">
                                                <div class="mu_fackts_block1">
                                                    <span class="mu_fackts_title">Факты и цифры:</span>
                                                </div>
                                                <div class="mu_fackts_block2">
                                                    <?php if(get_post_meta( get_the_ID(), 'un1', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'un1', true )?></span><?php } ?>
                                                    <?php if(get_post_meta( get_the_ID(), 'un2', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'un2', true )?></span><?php } ?>
                                                </div>
                                                <div class="mu_fackts_block3">
                                                    <?php if(get_post_meta( get_the_ID(), 'un3', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'un3', true )?></span><?php } ?>
                                                    <?php if(get_post_meta( get_the_ID(), 'un4', true )){ ?><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point4"><?=get_post_meta( get_the_ID(), 'un4', true )?></span><?php } ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mu-tab-cont mu-hidden" id="tab_2">
                                            <div class="table-overlay"><?=get_post_meta( get_the_ID(), 'ub', true )?></div>
                                        </div>
                                        <div class="mu-tab-cont mu-hidden" id="tab_3">
                                            <div class="table-overlay"><?=get_post_meta( get_the_ID(), 'um', true )?></div>
                                        </div>
                                        <div class="mu-tab-cont mu-hidden" id="tab_4">
                                            <?php echo do_shortcode( '[ngg_images source="galleries" container_ids="'.get_post_meta( get_the_ID(), 'ugal', true ).'" display_type="photocrati-nextgen_basic_thumbnails" override_thumbnail_settings="1" thumbnail_width="180" thumbnail_height="120" thumbnail_crop="1" images_per_page="999" number_of_columns="0" ajax_pagination="0" show_all_in_lightbox="0" use_imagebrowser_effect="0" show_slideshow_link="0" slideshow_link_text="" order_by="sortorder" order_direction="ASC" returns="included" maximum_entity_count="500"]' ); ?>
                                        </div>
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