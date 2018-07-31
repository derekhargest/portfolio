<?php
            $image = get_field('portfolio_image_main');
            if( !empty($image) ):
              $title = $image['title'];
              $alt = $image['alt'];
              $url = $image['url'];
          ?>
            
    <div class="work-showcase">
        <h2>Latest Work</h2>

        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo $url ?>" alt="<?php echo $alt; ?>">
        </a>

        <a href="<?php the_permalink(); ?>">
            <h3><?php the_title() ?></h3>
        </a>

        <a href="<?php the_permalink(); ?>" class="more-link-text">more work<i class="fas fa-arrow-right"></i></a>
    </div>

<?php endif; ?>
