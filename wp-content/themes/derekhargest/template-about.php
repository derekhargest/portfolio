<?php /* Template Name: About Template */ ?>

<?php get_header(); ?>

<?php
	$profileimage = get_field('about_profile_image_main');

	if( !empty($profileimage) ){

		$aboutprofiletitle = $profileimage['title'];
		$aboutprofilealt = $profileimage['alt'];
		$aboutprofileurl = $profileimage['url'];

	}
?>

<div class="wrap about">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/page/main-intro', get_post_format() ) ?>
		<div class="container page-container">
		<div class="about-img-wrap"></div>
			<div class="about-content">
				<div class="about-image">
				<img src="<?php echo $aboutprofileurl ?>" alt="<?php echo $aboutprofilealt ?>" class="about-profile-image">
				</div>
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>~
