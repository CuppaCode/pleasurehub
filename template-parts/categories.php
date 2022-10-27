<?php

$args = array(
    'taxonomy'   => "product_cat",
    'number'     => $number,
    'orderby'    => $orderby,
    'order'      => $order,
    'hide_empty' => $hide_empty,
    'include'    => $ids
);
$product_categories = get_terms($args);

?>

<section class="categories py-3">
    
    <h2 class="text-center pt-5">Categorieen</h2>
    <p class="text-center">Een greep uit onze categorieen</p>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php foreach( $product_categories as $category ) : ?>
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= get_stylesheet_directory_uri(). '/img/slider/zonnepaneel-1.jpg'; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $category->name; ?></h5>

                            <?php if (!empty( $category->description ) ) : ?>

                                <p class="card-text"><?= $category->description ?></p>

                            <?php endif; ?>
                            
                            <a href="<?= get_term_link( $category ); ?>" class="btn btn-outline-primary btn-block">Naar categorie</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>