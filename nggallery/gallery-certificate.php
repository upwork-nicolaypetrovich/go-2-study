				<div class="mu_about_slider_wr">
                        <h2 class="mu_about_slider_h">Дипломы и сертификаты</h2>
                        <div class="mu_about_slider">
                        	<?php foreach ( $images as $image ) : ?>
                            <div class="mu_slide_wrap">
                                <div class="mu_slide">
                                    <img src="<?php echo $image->thumbnailURL; ?>" alt="slide">
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>