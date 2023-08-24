<?php

$args = array(
    'taxonomy'   => "product_cat",
    'number'     => $number,
    'orderby'    => $orderby,
    'order'      => $order,
    'posts_per_page' => 3,
    'hide_empty' => $hide_empty,
    'include'    => $ids
);
$product_categories = get_terms($args);

?>

<section class="categories py-3">
    
    <div class="fancy-page-title">
        <div class="fancy-page-subtitle">
            <h2>
                Categorieen
                <a href="#" class="flex more-content-url">
                    <span>Bekijk meer</span>
                </a>
            </h2>
            <p>Een greep uit onze categorieen</p>
        </div> 
    </div>
    
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 pb-5">

        <?php foreach( $product_categories as $key => $category ) : ?>

            <?php $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true ); ?>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white rounded position-relative border border-light">
                    
                    <a href="<?php echo get_term_link($category->term_id, 'product_cat'); ?>" title="product category link" class="stretched-link"></a>

                    <?php if($thumbnail_id != '') : ?>

                        <img src="<?php echo wp_get_attachment_url( $thumbnail_id );?>" alt=""/>

                    <?php endif ?>

                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 position-absolute bottom-0 d-none">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold d-none"><?= $category->name; ?></h2>
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