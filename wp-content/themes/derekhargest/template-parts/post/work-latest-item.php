<div class="work-latest-item">
	<header>
		<h2><?php the_title(); ?></h2>
	</header>
    <div class="work-featured">
	<?php

	$image = get_field('portfolio_image_main');
	if( !empty($image) ):
		$title = $image['title'];
		$alt = $image['alt'];
		$url = $image['url'];


		?>
		<div class="work-featured-image">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo $url ?>" alt="<?php echo $alt; ?>">
			</a>
		</div>

	<?php endif; ?>

	<div class="work-latest-item-info">
		<article>
			<?php the_content() ?>
		</article>
		<div class="tag-list">
			<?php
			$terms = get_terms(array(
				'taxonomy' => 'skills',
				'hide_empty' => false
			));
			foreach($terms as $term):

				?>
                <a href="#" class="tag"><?php echo $term->name; ?></a>
			<?php endforeach; ?>

        </div>

    </div>

	</div>
    <div class="work-latest-showcase">
        <div class="work-latest-tablet showcase-item">
            <?php

            $tablet_image = get_field('portfolio_image_tablet');
            if( !empty($tablet_image) ):
            $tablet_title = $tablet_image['title'];
            $tablet_alt = $tablet_image['alt'];
            $tablet_url = $tablet_image['url'];


            ?>

            <div class="work-tablet-image">
                <img src="<?php echo $tablet_url ?>" alt="<?php echo $tablet_alt; ?>">
            </div>

            <?php endif; ?>

        </div>
        <div class="work-latest-mini showcase-item">
		    <?php

			$mini_image = get_field( '' );
				if( !empty($mini_image)):
				

			    $mini_title = $mini_image['title'];
			    $mini_alt = $mini_image['alt'];
			    $mini_url = $mini_image['url'];


			    ?>

                <div class="work-tablet-image">
                    <img src="<?php echo $mini_url ?>" alt="<?php echo $mini_alt; ?>">
                </div>

		    <?php endif; ?>

        </div>
    </div>
</div>