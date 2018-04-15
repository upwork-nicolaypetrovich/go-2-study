<?php get_header(); ?>

            <div class="mu_content">
                <div class="mu_contacts_content">
                    
                    <div class="mu_cost_univer">
                        <p class="mu_select_univer_wr">
                            <span><img src="<?=get_template_directory_uri()?>/images/contacts_img.png" class="mu_univer_img" alt="contacts"></span>
                            <span class="mu_contacts_univer_txt">КОНТАКТЫ</span>
                        </p>
                    </div>
                    <div class="mu_map_wrap">
                        <img src="<?=get_template_directory_uri()?>/images/hat3.png" class="hat3" alt="hat">
                        <div class="mu_map_wrap_col1">
                            <img src="<?=get_template_directory_uri()?>/images/map_img1.png" alt="map_img" class="mu_map_img1">
                            <h3 class="mu_map_h3">Главный офис "Go2Study" в Украине</h3>
                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c11', true ))?>
                            <span class="mu_map_span"><i>Время работы:</i> <?=get_post_meta( get_the_ID(), 'c12', true )?></span>
                            <div class="mu_map_inf-wr">
                                <div class="mu_map_inf">
                                    <div>
                                        <p class="mu_img_vib">
                                            <img src="<?=get_template_directory_uri()?>/images/viber.png" alt="viber">
                                        </p>
                                    </div>
                                    <div>
                                        <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c13', true )?></p>
                                        <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c14', true )?></p>  
                                    </div>                      
                                </div>
                                <div class="mu_skype">
                                    <img src="<?=get_template_directory_uri()?>/images/skype.png" alt="skype">
                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c15', true )?>"><?=get_post_meta( get_the_ID(), 'c15', true )?></a>
                                </div>
                                <div class="mu_mail">
                                    <img src="<?=get_template_directory_uri()?>/images/mail.png" alt="mail">
                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c16', true )?>"><?=get_post_meta( get_the_ID(), 'c16', true )?></a>
                                </div>
                            </div>
                        </div>
                        <div class="mu_map_wrap_col2">
                            <div class="mu_map_wr">
                                <div id="map" class="map" width="610" height="315"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mu_map_wrap">
                        <div class="mu_map_wrap_col1">
                            <img src="<?=get_template_directory_uri()?>/images/map_img1.png" alt="map_img" class="mu_map_img1">
                            <h3 class="mu_map_h3">Главный офис "Go2Study" в Польше</h3>
                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c21', true ))?>
                            <span class="mu_map_span"><i>Время работы:</i> <?=get_post_meta( get_the_ID(), 'c22', true )?></span>
                            <div class="mu_map_inf-wr">
                                <div class="mu_map_inf">
                                    <div>
                                        <p class="mu_img_vib">
                                            <img src="<?=get_template_directory_uri()?>/images/viber.png" alt="viber">
                                        </p>
                                    </div>
                                    <div>
                                        <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c23', true )?></p>
                                        <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c24', true )?></p>  
                                    </div>                      
                                </div>
                                <div class="mu_skype">
                                    <img src="<?=get_template_directory_uri()?>/images/skype.png" alt="skype">
                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c25', true )?>"><?=get_post_meta( get_the_ID(), 'c25', true )?></a>
                                </div>
                                <div class="mu_mail">
                                    <img src="<?=get_template_directory_uri()?>/images/mail.png" alt="mail">
                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c26', true )?>"><?=get_post_meta( get_the_ID(), 'c26', true )?></a>
                                </div>
                            </div>
                        </div>
                        <div class="mu_map_wrap_col2">
                            <div class="mu_map_wr">
                                <div id="map2" class="map" width="610" height="315"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mu_addit_off_wrap">
                        <img src="<?=get_template_directory_uri()?>/images/book3.png" class="mu_book3" alt="book">
                        <h2 class="mu_addit_off_h2">Дополнительные офисы</h2>
                        <div class="mu_cont-wrapp">    
                            <div class="mu_cont_wrapp">
                                <div class="mu_cont_col1 mu_cont_col  mu_cont_col1_3"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Львов</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c31', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c32', true )?></span>
                                            <!-- не тот пхп код -->
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c33', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c34', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c35', true )?>"><?=get_post_meta( get_the_ID(), 'c35', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c36', true )?>"><?=get_post_meta( get_the_ID(), 'c36', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map3" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>    
                                <div class="mu_cont_col2 mu_cont_col mu_cont_col1_4"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Днепр</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c41', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c42', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c43', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c44', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c45', true )?>"><?=get_post_meta( get_the_ID(), 'c45', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c46', true )?>"><?=get_post_meta( get_the_ID(), 'c46', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map4" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mu_cont-wrapp">    
                            <div class="mu_cont_wrapp">
                                <div class="mu_cont_col1 mu_cont_col  mu_cont_col1_5"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Винница</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c51', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c52', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c53', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c54', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c55', true )?>"><?=get_post_meta( get_the_ID(), 'c55', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c56', true )?>"><?=get_post_meta( get_the_ID(), 'c56', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map5" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mu_cont_col2 mu_cont_col  mu_cont_col1_6"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Кривой Рог</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c61', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c62', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c63', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c64', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c65', true )?>"><?=get_post_meta( get_the_ID(), 'c65', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c66', true )?>"><?=get_post_meta( get_the_ID(), 'c66', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map6" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mu_cont-wrapp">    
                            <div class="mu_cont_wrapp">
                                <div class="mu_cont_col1 mu_cont_col  mu_cont_col1_7"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Чернигов</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c71', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c72', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c73', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c74', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c75', true )?>"><?=get_post_meta( get_the_ID(), 'c75', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c76', true )?>"><?=get_post_meta( get_the_ID(), 'c76', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map7" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mu_cont_col2 mu_cont_col  mu_cont_col1_8"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Запорожье</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                           <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c81', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c82', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c83', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c84', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c85', true )?>"><?=get_post_meta( get_the_ID(), 'c85', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c86', true )?>"><?=get_post_meta( get_the_ID(), 'c86', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map8" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mu_cont-wrapp">    
                            <div class="mu_cont_wrapp">
                                <div class="mu_cont_col1 mu_cont_col  mu_cont_col1_9"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Харьков</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c91', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c92', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c93', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c94', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c95', true )?>"><?=get_post_meta( get_the_ID(), 'c95', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c96', true )?>"><?=get_post_meta( get_the_ID(), 'c96', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map9" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mu_cont_col2 mu_cont_col  mu_cont_col1_10"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Одесса</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c101', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c102', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c103', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c104', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c105', true )?>"><?=get_post_meta( get_the_ID(), 'c105', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c106', true )?>"><?=get_post_meta( get_the_ID(), 'c106', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map10" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mu_cont-wrapp">    
                            <div class="mu_cont_wrapp">
                                <div class="mu_cont_col1 mu_cont_col  mu_cont_col1_11"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Полтава</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c111', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c112', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c113', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c114', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c115', true )?>"><?=get_post_meta( get_the_ID(), 'c115', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c116', true )?>"><?=get_post_meta( get_the_ID(), 'c116', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map11" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mu_cont_col2 mu_cont_col  mu_cont_col1_12"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Николаев</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c121', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c122', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c123', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c124', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c125', true )?>"><?=get_post_meta( get_the_ID(), 'c125', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c126', true )?>"><?=get_post_meta( get_the_ID(), 'c126', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map12" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mu_cont-wrapp">    
                            <div class="mu_cont_wrapp">
                                <div class="mu_cont_col1 mu_cont_col  mu_cont_col1_13"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Сумы</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c131', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c132', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c133', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c134', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c135', true )?>"><?=get_post_meta( get_the_ID(), 'c135', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c136', true )?>"><?=get_post_meta( get_the_ID(), 'c136', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map13" class="map" width="280" height="265"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mu_cont_col2 mu_cont_col  mu_cont_col1_14"><span><img src="<?=get_template_directory_uri()?>/images/point3.png" alt="point" class="mu_point3">Представительство г. Херсон</span>
                                    <div class="mu_map_hide">
                                        <div class="mu_map_hide_txt">
                                            <?=str_replace("\n", "<br>", get_post_meta( get_the_ID(), 'c141', true ))?>
                                            <span>Время работы:</span>
                                            <span><?=get_post_meta( get_the_ID(), 'c142', true )?></span>
                                            <p class="mu_first_phone_map"><?=get_post_meta( get_the_ID(), 'c143', true )?></p>
                                            <p class="mu_second_phone_map"><?=get_post_meta( get_the_ID(), 'c144', true )?></p>
                                            <div class="mu_map_hide_inf">
                                                <div class="mu_skype">
                                                    <img src="<?=get_template_directory_uri()?>/images/skype2.png" alt="skype">
                                                    <a href="skype:<?=get_post_meta( get_the_ID(), 'c145', true )?>"><?=get_post_meta( get_the_ID(), 'c145', true )?></a>
                                                </div>
                                                <div class="mu_mail">
                                                    <img src="<?=get_template_directory_uri()?>/images/mail2.png" alt="mail">
                                                    <a href="mailto:<?=get_post_meta( get_the_ID(), 'c146', true )?>"><?=get_post_meta( get_the_ID(), 'c146', true )?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mu_map_hide_map">
                                            <div id="map14" class="map" width="280" height="265"></div>
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
                <div class="mu_study mu_contacts_study">
                    <img src="<?=get_template_directory_uri()?>/images/mu_book.png" class="mu_book" alt="book">
                    <img src="<?=get_template_directory_uri()?>/images/hat3.png" class="hat2" alt="hat">

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


            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAp4kjdI4CnuCHKNThKJP4pkd6E8J_2geA"></script>
            <script>
               function initMap() {

                <?php $data = get_post_meta( get_the_ID(), 'c17', true );?>
                var myLatLng = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 14,
                  center: myLatLng
                });
                var marker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c27', true );?>
                var myLatLng2 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map2 = new google.maps.Map(document.getElementById('map2'), {
                  zoom: 14,
                  center: myLatLng2
                });
                var marker = new google.maps.Marker({
                  position: myLatLng2,
                  map: map2,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c37', true );?>
                var myLatLng3 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map3 = new google.maps.Map(document.getElementById('map3'), {
                  zoom: 14,
                  center: myLatLng3
                });
                var marker = new google.maps.Marker({
                  position: myLatLng3,
                  map: map3,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c47', true );?>
                var myLatLng4 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map4 = new google.maps.Map(document.getElementById('map4'), {
                  zoom: 14,
                  center: myLatLng4
                });
                var marker = new google.maps.Marker({
                  position: myLatLng4,
                  map: map4,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c57', true );?>
                var myLatLng5 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map5 = new google.maps.Map(document.getElementById('map5'), {
                  zoom: 14,
                  center: myLatLng5
                });
                var marker = new google.maps.Marker({
                  position: myLatLng5,
                  map: map5,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c67', true );?>
                var myLatLng6 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map6 = new google.maps.Map(document.getElementById('map6'), {
                  zoom: 14,
                  center: myLatLng6
                });
                var marker = new google.maps.Marker({
                  position: myLatLng6,
                  map: map6,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c77', true );?>
                var myLatLng7 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map7 = new google.maps.Map(document.getElementById('map7'), {
                  zoom: 14,
                  center: myLatLng7
                });
                var marker = new google.maps.Marker({
                  position: myLatLng7,
                  map: map7,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c87', true );?>
                var myLatLng8 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map8 = new google.maps.Map(document.getElementById('map8'), {
                  zoom: 14,
                  center: myLatLng8
                });
                var marker = new google.maps.Marker({
                  position: myLatLng8,
                  map: map8,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c97', true );?>
                var myLatLng9 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map9 = new google.maps.Map(document.getElementById('map9'), {
                  zoom: 14,
                  center: myLatLng9
                });
                var marker = new google.maps.Marker({
                  position: myLatLng9,
                  map: map9,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c107', true );?>
                var myLatLng10 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map10 = new google.maps.Map(document.getElementById('map10'), {
                  zoom: 14,
                  center: myLatLng10
                });
                var marker = new google.maps.Marker({
                  position: myLatLng10,
                  map: map10,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c117', true );?>
                var myLatLng11 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map11 = new google.maps.Map(document.getElementById('map11'), {
                  zoom: 14,
                  center: myLatLng11
                });
                var marker = new google.maps.Marker({
                  position: myLatLng11,
                  map: map11,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c127', true );?>
                var myLatLng12 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map12 = new google.maps.Map(document.getElementById('map12'), {
                  zoom: 14,
                  center: myLatLng12
                });
                var marker = new google.maps.Marker({
                  position: myLatLng12,
                  map: map12,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c137', true );?>
                var myLatLng13 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map13 = new google.maps.Map(document.getElementById('map13'), {
                  zoom: 14,
                  center: myLatLng13
                });
                var marker = new google.maps.Marker({
                  position: myLatLng13,
                  map: map13,
                  title: '<?=$data['address']?>'
                });


                <?php $data = get_post_meta( get_the_ID(), 'c147', true );?>
                var myLatLng14 = {lat: <?=$data['lat']?>, lng: <?=$data['lng']?>};
                var map14 = new google.maps.Map(document.getElementById('map14'), {
                  zoom: 14,
                  center: myLatLng14
                });
                var marker = new google.maps.Marker({
                  position: myLatLng14,
                  map: map14,
                  title: '<?=$data['address']?>'
                });

              }
              
              google.maps.event.addDomListener(window, 'load', initMap);
            </script>
            <script>
                jQuery( ".mu_cont_col1_3").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map3, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_4").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map4, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_5").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map5, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_6").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map6, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_7").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map7, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_8").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map8, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_9").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map9, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_10").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map10, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_11").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map11, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_12").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map12, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_13").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map13, 'resize');
                    }, 500);
                });
                jQuery( ".mu_cont_col1_14").on( "click", function() {
                    setTimeout(function(){
                        google.maps.event.trigger(map14, 'resize');
                    }, 500);
                });
                
            </script>

            <?php get_footer(); ?>
