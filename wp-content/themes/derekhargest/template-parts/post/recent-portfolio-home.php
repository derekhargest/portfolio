<div class="work-item">
	<?php
	$image = get_field('portfolio_image_main');

	if( !empty($image) ):

		$title = $image['title'];
		$alt = $image['alt'];
		$url = $image['url'];


		?>
		<a href="<?php the_permalink(); ?>" class="work-img">
			<img src="<?php echo $url ?>" alt="<?php echo $alt; ?>">
		</a>
	<?php endif; ?>
	<header><a href="<?php the_permalink(); ?>" class="home-work-title"><h3><?php the_title(); ?></h3></a></header>
	<article><?php the_content() ?></article>
</div>