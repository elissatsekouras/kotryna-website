<?php if(have_posts() ): while(have_posts() ): the_post(); ?>
    <div class="post-wrapper">
        <div class="main-container">
        </div>
        <div class="post-container">
            <?php the_content(); ?>
        </div>
        <div class="main-container">
        </div>
    </div>
<?php endwhile; else: endif; ?>
