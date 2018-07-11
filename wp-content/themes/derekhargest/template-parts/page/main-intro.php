<?php
	$image = get_field('page_hero_image');
	if( !empty($image) ){
		$title = $image['title'];
		$alt = $image['alt'];
		$url = $image['url'];
	};

	$subtitle = get_field('page_subtitle');
	$altTitle = get_field('page_alternate_title');

?>

<div class="main-intro pages <?php if (empty($image)):?><?php echo 'no-hero' ?><?php endif; ?>" <?php if (!empty($image)):?>style="background-image: url('<?php echo $url ?>')"<?php endif ?>>
	<div class="container page-container">
		<header class="page-header">
			<h1 class="topline">
				<?php 
					if ($altTitle){
						echo $altTitle;
					}
					else{
						the_title();
					} 
				?>
			</h1>
		</header>
		<?php if ($subtitle): ?>
			<div class="breadcrumb"><span><?php echo $subtitle; ?></span></div>
		<?php endif; ?>
	</div>
</div>