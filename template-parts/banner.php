<?php

    $title = $args['title'];
    $description = $args['description'];
    $background = $args['background'];
    $link = $args['link'];

?>

<div class="container pb-4 px-0">

    <div class="banner">

        <?php if ( $background ) : ?>

            <img class="img-fluid" loading="lazy" alt="<?= $background['title'] ?>" src="<?= $background['url'] ?>" />

        <?php endif; ?>

        <h2><?= $title ?? 'Title' ?></h2>

        <?php if ( $link ) : ?>

            <a href="<?= $link ?>" class="stretched-link"></a>

        <?php endif; ?>

        <?php if ( $description ) : ?>

            <p><?= $description ?></p>

        <?php endif; ?>

    </div>

</div>