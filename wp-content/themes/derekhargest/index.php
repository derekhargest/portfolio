<?php
/**
 * Index File
 */
get_header();
?>

<div class="wrap">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/page/main-intro', get_post_format() ) ?>

        <?php get_template_part( 'template-parts/page/page-content', get_post_format() ) ?>

    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
    <?php wp_reset_postdata(); ?>

	<?php get_footer(); ?>
</div>
