<?php

    $title = $args['title'];
    $subtitle = $args['subtitle'];
    $shortcode = $args['shortcode'];

?>

<section class="py-3">
    
    <?php if ( $title ) : ?>

        <h2 class="text-center pt-5"><?php echo $title ?></h2>

    <?php endif ?>

    <?php if ( $subtitle ) : ?>

        <p class="text-center"><?php echo $subtitle ?></p>

    <?php endif ?>
    
    <div class="pt-5">

        <?php if ( $shortcode ) : ?>
            
            <?php echo do_shortcode($shortcode); ?>

        <?php else : ?>

            <?php echo 'Hier moet nog code voor gemaakt worden' ?>

        <?php endif ?>

    </div>
</section>