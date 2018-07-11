<?php 
	$tagline = get_field( "tagline" );
	$image = get_field('portfolio_image_main');
	$platform = get_field('platform');
	$role = get_field('main_role');
 ?>

<div class="work-list__item">
	<div class="work-list__item-info">
		<?php 
			if( !empty($image) ):
				$title = $image['title'];
				$alt = $image['alt'];
				$url = $image['url'];
		?>
			<div class="work-list__image">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo $url ?>" alt="<?php echo $alt; ?>">
				</a>
			</div>
			<div class="work-list__info">
					<div class="work-list__title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<ul class="item-detail-icons">
						<?php if($role == "Frontend Development"): ?>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/front-end-logo-bw.svg" alt=""></a><div class="icon-tooltip"><?php echo $role; ?></div></li>
								
								<?php endif; ?>

								<?php if($platform == "Wordpress"): ?>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/wordpress.svg" alt=""></a><div class="icon-tooltip"><?php echo $platform; ?></div></li>
								<?php elseif($platform == "Concrete 5"): ?>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/concrete5.svg" alt=""></a><div class="icon-tooltip"><?php echo $platform; ?></div></li>
								<?php elseif($platform == "Hubspot"): ?>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/hubspot.svg" alt=""></a><div class="icon-tooltip"><?php echo $platform; ?></div></li>
								<?php elseif($platform == "Shopify"): ?>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/shopify.svg" alt=""></a><div class="icon-tooltip"><?php echo $platform; ?></div></li>
								<?php elseif($platform == "Magento"): ?>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/magento.svg" alt=""></a><div class="icon-tooltip"><?php echo $platform; ?></div></li>
								<?php endif; ?>

								
						</ul>
					</div>
				</div>
		<?php endif; ?>
	</div>
</div>