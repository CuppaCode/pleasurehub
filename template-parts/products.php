<?php

    $title = $args['title'];
    $subtitle = $args['subtitle'];
    $shortcode = $args['shortcode'];

?>

<section class="py-3">
    
    <div class="fancy-page-title">
        <div class="fancy-page-subtitle">
            <?php if ( $title ) : ?>

                <h2>
                    <?php echo $title ?>
                    <a href="#" class="flex more-content-url">
                        <span>Bekijk meer</span>
                    </a>
                </h2>

            <?php endif ?>

            <?php if ( $subtitle ) : ?>

                <p><?php echo $subtitle ?></p>

            <?php endif ?>
        </div>
            
    </div>
    
    <div class="pt-2">

        <?php if ( $shortcode ) : ?>
            
            <?php echo do_shortcode($shortcode); ?>

        <?php else : ?>

            <?php echo 'Hier moet nog code voor gemaakt worden' ?>

        <?php endif ?>

    </div>
</section>