<?php if(have_posts() ): while(have_posts() ): the_post(); ?>

                <div class="post-wrapper">
                        <?php
                            $next_post = get_next_post(true);
                            $next_post_link = get_permalink($next_post);
                            if (empty($next_post)) {
                                $args = array( 'numberposts' => '1', 'category' => get_the_category($post->ID)[0]->term_id, 'order' => 'ASC' );
                                $recent_posts = get_posts( $args );
                                $next_post_link = get_permalink($recent_posts[0]->ID);
                            }
                        ?>
                    <a href="<?php echo $next_post_link; ?>"> 
                        <div class="click-area-left"></div>
                    </a>
                    <div class="main-container">
                        <img src="<?php bloginfo('template_directory'); ?>/icons/left-arrow.png">
                    </div>
                    <div class="post-container">
                        <?php the_content(); ?>
                    </div>
                    <div class="main-container">
                        <img src="<?php bloginfo('template_directory'); ?>/icons/right-arrow.png">
                    </div>
                        <?php
                                $previous_post = get_previous_post(true);
                                $previous_post_link = get_permalink($previous_post);
                                if (empty($previous_post)) {
                                    $args = array( 'numberposts' => '1', 'category' => get_the_category($post->ID)[0]->term_id );
                                    $recent_posts = wp_get_recent_posts( $args );
                                    $previous_post_link = get_permalink($recent_posts[0]["ID"]);
                                }
                            ?>
                    <a href="<?php echo $previous_post_link; ?>">
                        <div class="click-area-right"></div>
                    </a>
                </div>
                <div>
                    <?php $catID = get_the_category(); 
                    echo category_description( $catID[0] ); ?>
                </div>

<?php endwhile; else: endif; ?>