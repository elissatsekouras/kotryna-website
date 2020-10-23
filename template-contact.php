<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
    <div class="content-outer">
        <div class="main-outer">
            <div class="contact-img-wrapper">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>
            <div class="contact-text-wrapper">
                <?php get_template_part('includes/section', 'content'); ?>     
            </div>
            
        </div>
    </div>

<?php get_footer(); ?>