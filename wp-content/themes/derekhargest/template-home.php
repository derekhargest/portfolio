<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>

<div class="wrap">
  <div class="intro-hero">
    <div class="intro-hero__container container">
      <header class="main-header">
        <div class="intro-hero__title">
          <h1 class="topline">Hello! <br/>I'm Derek Hargest</h1>
          <p>I'm a creative front-end developer from Baltimore, MD. I focus on the intersection of design and technology to create interesting and memorable user experiences.</p>       
          <div class="platform-list">
            <p>I work on these platforms:</p>
            <ul>

              <li>
                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/wordpress.svg" alt="">
                        </div>
                        <div class="back">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/wordpress-pink.svg" alt="" class="partner-logo">
                        </div>
                    </div>
                </div>
              </li>
            
              <li>
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/magento.svg" alt="">
                    </div>
                    <div class="back">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/magento-pink.svg" alt="" class="partner-logo">
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="flip-container">
                    <div class="flipper">
                      <div class="front">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/hubspot.svg" alt="">
                      </div>
                      <div class="back">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/hubspot-pink.svg" alt="" class="partner-logo">
                      </div>
                    </div>
                </div>
              </li>

              <li>
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/shopify.svg" alt="">
                    </div>
                    <div class="back">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/shopify-pink.svg" alt="" class="partner-logo">
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="flip-container">
                    <div class="flipper">
                      <div class="front">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/concrete5.svg" alt="">
                      </div>
                      <div class="back">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/concrete5-pink.svg" alt="" class="partner-logo">
                      </div>
                    </div>
                </div>
              </li>

            </ul>
          </div>
          <p>I'm currently <span class="availability">available</span> to take on new projects.</p>
          <p>Feel free to take a look at some of my <a href="<?php echo site_url(); ?>/work" class="inline-link" id="inline-link">work</a>, read a little <a href="<?php echo site_url(); ?>/about" class="inline-link">about me</a> or drop me a <a href="<?php echo site_url(); ?>/contact" class="inline-link">line</a>, I'd love to hear from you.</p>
        </div>
      </header>
      <?php
        $args_latest_work = array(
          'post_type' => 'portfolio_item',
          'posts_per_page' => 1
        );
      ?>

      <?php $query_items = new WP_Query( $args_latest_work ); ?>
        <?php if ( $query_items->have_posts() ) : while ( $query_items->have_posts() ) : $query_items->the_post(); ?>
         <?php // get_template_part( 'template-parts/post/home-work-showcase', get_post_format() ) ?>

          <?php endwhile;
            wp_reset_postdata();
          else : ?>

          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

              <?php
        $args_latest_blog = array(
          'type' => 'post',
          'posts_per_page' => 1
        );
      ?>

      <?php $query_items2 = new WP_Query( $args_latest_blog ); ?>
        <?php if ( $query_items2->have_posts() ) : while ( $query_items2->have_posts() ) : $query_items2->the_post(); ?>
         <?php // get_template_part( 'template-parts/post/home-blog-showcase', get_post_format() ) ?>

          <?php endwhile;
            wp_reset_postdata();
          else : ?>

          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
	<!-- /.content -->
  </div>
</div>
<!-- /.wrap -->

<?php get_footer(); ?>
