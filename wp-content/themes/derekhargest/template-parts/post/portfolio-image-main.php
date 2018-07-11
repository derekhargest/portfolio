<div class="portfolio-item-images highlights">
        <?php
            $image1 = get_field('portfolio_item_image_1');
            if( !empty($image1) ):
                $title = $image1['title'];
                $alt = $image1['alt'];
                $url = $image1['url'];
        ?>
        
        <div class="portfolio-item-image">
        <a href=".blurb" class="gallery" data-title="<?php echo $alt; ?>"><img src="<?php echo $url ?>" alt="<?php echo $alt; ?>">
        <div id="highlight-2" class="highlight-box blurb">
        <div class="container">
            <div class="highlight-image"><img src="<?php echo $url ?>" alt="<?php echo $alt; ?>"></div>
            <div class="highlight-content-wrap">
                <div class="highlight-content">
                    <h3>Highlight Title</h3>
                    <p>This is not your normal tattoo shop, and in fitting fashion this was not your typical tattoo shop website. The owner, Darl, needed a solution to not only showcase his work but to also sell some of his artwork.</p></div>
                </div>
            </div> 
        </div>
        </a>
    </div>
    


        
        <?php endif ?>



<?php

$image2 = get_field('portfolio_item_image_2');
if( !empty($image2) ):
    $title = $image2['title'];
    $alt = $image2['alt'];
    $url = $image2['url'];
?>

<div class="portfolio-item-image">
    <a href=".blurb-2" class="gallery" data-title="<?php echo $alt; ?>"><img src="<?php echo $url ?>" alt="<?php echo $alt; ?>">
    <div id="highlight-2" class="highlight-box blurb-2">
    <div class="container">
        <div class="highlight-image"><img src="<?php echo $url ?>" alt="<?php echo $alt; ?>"></div>
        <div class="highlight-content-wrap">
            <div class="highlight-content">
                <h3>Highlight Title</h3>
                <p>This is not your normal tattoo shop, and in fitting fashion this was not your typical tattoo shop website. The owner, Darl, needed a solution to not only showcase his work but to also sell some of his artwork.</p></div>
            </div>
        </div> 
    </div>
    </a>
</div>


<?php endif ?>

<?php

$image3 = get_field('portfolio_item_image_3');
if( !empty($image3) ):
    $title = $image3['title'];
    $alt = $image3['alt'];
    $url = $image3['url'];
?>

<div class="portfolio-item-image">
    <a href=".blurb-3" class="gallery" data-title="<?php echo $alt; ?>"><img src="<?php echo $url ?>" alt="<?php echo $alt; ?>">
    <div id="highlight-3" class="highlight-box blurb-3">
    <div class="container">
        <div class="highlight-image"><img src="<?php echo $url ?>" alt="<?php echo $alt; ?>"></div>
        <div class="highlight-content-wrap">
            <div class="highlight-content">
                <h3>Highlight Title</h3>
                <p>This is not your normal tattoo shop, and in fitting fashion this was not your typical tattoo shop website. The owner, Darl, needed a solution to not only showcase his work but to also sell some of his artwork.</p></div>
            </div>
        </div> 
    </div>
</a>

</div>



<?php endif ?>

<?php

$image4 = get_field('portfolio_item_image_4');
if( !empty($image4) ):
    $title = $image4['title'];
    $alt = $image4['alt'];
    $url = $image4['url'];
?>

<div class="portfolio-item-image">
    <a href=".blurb-4" class="gallery" data-title="<?php echo $alt; ?>"><img src="<?php echo $url ?>" alt="<?php echo $alt; ?>">
    <div id="highlight-4" class="highlight-box blurb-4">
    <div class="container">
        <div class="highlight-image"><img src="<?php echo $url ?>" alt="<?php echo $alt; ?>"></div>
        <div class="highlight-content-wrap">
            <div class="highlight-content">
                <h3>Highlight Title</h3>
                <p>This is not your normal tattoo shop, and in fitting fashion this was not your typical tattoo shop website. The owner, Darl, needed a solution to not only showcase his work but to also sell some of his artwork.</p></div>
            </div>
        </div> 
    </div>
</a>

</div>

<?php endif ?>

<script>

    $(document).ready(function(){
            $('.gallery').featherlightGallery({
                gallery: {
                    fadeIn: 300,
                    fadeOut: 300,
                },
                openSpeed:    300,
                closeSpeed:   300,
                previousIcon: '<i class="fas fa-chevron-circle-left"></i>',
                nextIcon: '<i class="fas fa-chevron-circle-right"></i>'
            });
        });
</script>
    </div>