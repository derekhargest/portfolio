<?php /* Template Name: Work Template */ ?>

<?php get_header(); ?>

<?php
	$args_work_items = array(
		'post_type' => 'portfolio_item',
		'posts_per_page' => 7
	);
?>


<div class="wrap">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/page/main-intro', get_post_format() ) ?>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	<?php wp_reset_postdata(); ?>
	
	<div class="container work-container">
		<div class="work-list">
			<?php $query_items = new WP_Query( $args_work_items ); ?>
			<?php if ( $query_items->have_posts() ) : while ( $query_items->have_posts() ) : $query_items->the_post(); ?>
                <?php get_template_part( 'template-parts/post/work-list-item', get_post_format() ) ?>
			<?php endwhile;
				wp_reset_postdata();
			else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>

</div>

<!-- /.wrap -->

<?php get_footer(); ?>
