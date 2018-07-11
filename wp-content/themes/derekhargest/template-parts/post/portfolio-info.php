<?php 

$mainRole = get_field( "main_role" );
$tagline = get_field( "tagline" );
$partner = get_field( "partner" );
$partnerLink = get_field( "partner_link" );

$showcaseImg = get_field('showcase_img');
if( !empty($showcaseImg) ){
    $showcaseImgTitle = $showcaseImg['title'];
    $showcaseImgAlt = $showcaseImg['alt'];
    $showcaseImgUrl = $showcaseImg['url'];
}

?>

<div class="portfolio-item-info">
    <div class="portfolio-info-wrap">
    <div class="portfolio-showcase">
            <a href="<?php echo $showcaseImgUrl; ?>" data-lightbox="showcase-img" data-title="<?php echo $showcaseImgAlt; ?>"><img src="<?php echo $showcaseImgUrl ?>" alt="<?php echo $showcaseImgAlt; ?>"></a>
        </div>

    </div>
    <div class="portfolio-content">
    <div class="portfolio-item-info-title">
                <div class="info-title-wrap">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php echo $tagline; ?></h2>
                </div>
            </div>
        <?php the_content() ?>

    </div>
    <?php get_template_part( 'template-parts/post/portfolio-image-main', get_post_format() ); ?>
    
            <?php if ($partner): ?>
                <!-- <div class="additional-info">
                    <h3>Built in conjunction with:</h3> 
                    <a href="<?php echo $partnerLink ?>">
                        <?php if($partner = 'MGH'): ?>
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mgh-logo.svg" alt="" class="partner-logo">
                                    </div>
                                    <div class="back">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mgh-logo-pink.svg" alt="" class="partner-logo">
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </a> 
                </div> -->
            <?php endif; ?>
</div>