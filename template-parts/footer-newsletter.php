<?php
/**
 * The template for displaying the newsletter footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper" id="wrapper-footer-newsletter">
    <div class="<?php echo esc_attr( $container ); ?>">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    <h2 class="newsletter-title"><?php the_field('newslettertitle', 'option'); ?></h2>
                    <p class="newsletter-text"><?php the_field('newslettertext', 'option'); ?></p>
                </div>

                <div class="footer-newsletter-form">
                    <form action="https://pleasurehub.us21.list-manage.com/subscribe/post?u=9e8a7d1226b940645192ffe36&amp;id=3ceb9670ec&amp;f_id=008f51e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form-inline validate" target="_self">
                         <div class="input-group w-auto">
                                <input type="email" value="" placeholder="Vul jouw emailadres in." name="EMAIL" class="required form-control" id="mce-EMAIL" required>

                                <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Aanmelden</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
