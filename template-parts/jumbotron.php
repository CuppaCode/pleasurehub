<?php

$sections = $args['sections'];
$section_amount = count($args['sections']);

?>

<div class="container pb-4 px-0">
    <div class="row mb-4 g-0">
        <div class="col-md-6 order-md-1">
            <div class="hero-image" style="background-image: url('<?php echo $sections[0]['image'] ?>');">
            </div>
        </div>
        <div class="col-md-6 order-md-12">
            <div class="hero-info">
                <div>
                    <h1>De zomer is begonnen!</h1>
                    <p>Maak de zomer nog warmer met onze producten.</p>
                    <a class="btn btn-primary" href="#">Bekijk nu</a>
                </div>  
            </div>
        </div>
    </div>

    <?php 
    $favorites = array(
        'for-him' => array('Voor hem', '/test'),
        'for-her' => array('Voor haar', '#'),
        'for-koppels' => array('Voor koppels', '#'),
        'populair' => array('Nu populair', '#'),
        'our-choice' => array('Onze keuze', '#'),
    );
    ?>

    <div class="row mb-4">
        <?php foreach ($favorites as $favorite):
        printf('<div class="col">
                    <a href="%2$s" class="favorite-box">
                        <span>%1$s</span>
                        <i class="bi bi-arrow-right"></i> 
                    </a>
                </div>', 
                $favorite[0], 
                $favorite[1], 
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