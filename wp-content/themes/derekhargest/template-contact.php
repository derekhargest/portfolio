<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>

<div class="wrap">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/page/main-intro', get_post_format() ) ?>
         <div class="container contact-container">
            <div class="split-main">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i><a href="mailto:email@derekhargest.com"><h2>email@derekhargest.com</a></h2>
                </div>
                <div class="contact-item">
                    <i class="fab fa-twitter"></i><a href="https://twitter.com/DevSoHard"><h2>@devsohard</a></h2>
                </div>
                <div class="contact-item">
                    <i class="fab fa-instagram"></i><a href="https://www.instagram.com/derekhargest/"><h2>derekhargest</a></h2>
                </div>
            </div>

            <div class="split-sidebar">
                        <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
