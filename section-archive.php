<?php if(have_posts() ): while(have_posts() ): the_post(); ?>
                <div class="post-wrapper">
                    <div class="main-container">
                    </div>
                    <div class="post-container">
                        <?php the_content(); ?>
                    </div>
                    <div class="main-container">
                        <img src="<?php bloginfo('template_directory'); ?>/icons/right-arrow.png">
                    </div>

                        <?php $previous_post = get_previous_post(true); ?>
                        <a href="<?php echo get_permalink( $previous_post ); ?>">
                            <div class="click-area-right"></div>
                        </a>
                </div>
                <div>
                    <?php echo category_description(); ?>
                </div>

<?php endwhile; else: endif; ?>

