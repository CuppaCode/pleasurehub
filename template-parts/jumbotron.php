<?php

$sections = $args['sections'];
$section_amount = count($args['sections']);
$favorites = $args['categories'];

?>

<div class="container pb-4 px-0">
    <div class="row mb-4 g-0">
        <div class="col-md-6 order-md-1 hero-image-wrapper">
            <div class="hero-image" style="background-image: url('<?php echo $sections[0]['image'] ?>');">
            </div>
        </div>
        <div class="col-md-6 order-md-12 hero-info-wrapper">
            <div class="hero-info">
                <div>
                    <h1><?= $sections[0]['title'] ?? 'Title' ?></h1>

                    <?php if ( $sections[0]['description'] ) : ?>

                    <p>
                        <?= $sections[0]['description'] ?>
                    </p>

                    <?php endif; ?>
                    
                    <?php if ( $sections[0]['link'] ) : ?>

                        <a class="btn btn-primary" href="<?= $sections[0]['link']['url'] ?>"><?= $sections[0]['link']['title'] ?></a>

                    <?php endif; ?>
                </div>  
            </div>
        </div>
    </div>

    <?php 
    // $favorites = array(
    //     'for-him' => array('Voor hem', '/test'),
    //     'for-her' => array('Voor haar', '#'),
    //     'for-koppels' => array('Voor koppels', '#'),
    //     'populair' => array('Nu populair', '#'),
    //     'our-choice' => array('Onze keuze', '#'),
    // );

        // $favorites = get_terms(array(
        //     'taxonomy' => 'product_cat',
        //     'include' => $categories
        // ));
    ?>

    <div class="row mb-4 favorite-wrapper">
        <?php foreach ($favorites as $favorite):

        printf('<div class="col">
                    <a href="%2$s" class="favorite-box">
                        <span>%1$s</span>
                        <i class="bi bi-arrow-right-short"></i> 
                    </a>
                </div>', 
                $favorite->name, 
                get_term_link($favorite->term_id, 'product_cat'), 
            );
            
        endforeach; ?>
    </div>


    <div class="row align-items-md-stretch">

        <?php foreach ($sections as $key => $section) : ?>

            <?php if ($key >= 1 && $section_amount == 3 || $section_amount < 3) : ?>

                <div class="col-md-6">

                    <a href="<?php echo $section['link']['url'] ?>" title="<?php echo $section['link']['title'] ?>">
                        <img loading="lazy" src="<?php echo $section['image'] ?>" alt="" class="img-fluid border rounded w-100 mb-4">
                    </a>

                </div>

            <?php endif ?>

        <?php endforeach; ?>

    </div>

</div>