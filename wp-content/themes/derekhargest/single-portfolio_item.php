<?php get_header(); ?>

<?php 
    $image = get_field('portfolio_item_hero');
        if( !empty($image) ){
            $title = $image['title'];
            $alt = $image['alt'];
            $url = $image['url'];
        }
    $mainRole = get_field( "main_role" );
    $platform = get_field( "platform" );
    $partner = get_field( "partner" );
?>


<div class="wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="main-intro items work-item-title" style="background-image: url('<?php echo $url ?>')">
                    <div class="container">
                    
                        <header class="page-header">
                            <h1 class="topline"><?php the_title(); ?></h1>
                        </header>
                        <div class="breadcrumb"><span><?php echo $mainRole; ?></span><span><?php echo $platform; ?></span></div>
                    </div>
            </div>

        <div class="container">

            <?php get_template_part( 'template-parts/post/portfolio-info', get_post_format() ); ?>

        
        
        
        </div>

        <div class="container">
        

        <?php
            $prev_post = get_previous_post();
            if($prev_post) {
            $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
            echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="pagination-link-wrap"><div class="pagination-link"><i class="fas fa-angle-double-left"></i><br />Previous <br/>Project</div></a>' . "\n";
            }

            $next_post = get_next_post();
            if($next_post) {
            $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
            echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="pagination-link-wrap"><div class="pagination-link"><i class="fas fa-angle-double-right"></i><br />Next <br/>Project</i></div></a>' . "\n";
            }
        ?>

        </div>

    <?php endwhile; ?>
    
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
    </div>
</div>

<?php get_footer(); ?>