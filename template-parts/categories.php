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
    
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

        <?php foreach( $product_categories as $category ) : ?>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded shadow-lg" style="background: linear-gradient( rgba(0, 0, 0, .7), rgba(0, 0, 0, .7) ), url('<?= get_stylesheet_directory_uri(). '/img/slider/zonnepaneel-1.jpg'; ?>'); background-position: 50% 50%;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?= $category->name; ?></h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/img/favicon.png'?>" alt="favicon pleasurehub" class="rounded-circle" width="32" height="32">
                            </li>

                            <?php if (!empty( $category->description ) ) : ?>

                                <li class="d-flex align-items-center me-3">
                                    <small><?= $category->description ?></small>
                                </li>

                            <?php endif; ?>

                            <li class="d-flex align-items-center">
                                <small><?= $category->count ?: 0 ?> Producten</small>
                            </li>
                            <a class="stretched-link" href="<?= get_term_link( $category ); ?>"></a>
                        </ul>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</section>