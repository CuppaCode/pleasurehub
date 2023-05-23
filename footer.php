<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<?php get_template_part( 'template-parts/footer', 'newsletter' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

			<footer class="py-5">
				<div class="row">
                    <div class="col-2">
						<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        <?php endif; ?>
					</div>


					<div class="col-2">
						<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        <?php endif; ?>
					</div>


					<div class="col-2">
						<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        <?php endif; ?>
					</div>

					<div class="col-4 offset-1">
					<div class="col">
						<a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                            <?php the_custom_logo(); ?>
						</a>
						</div>
					</div>
				</div>

				<div class="d-flex justify-content-between py-4 my-4 border-top">
				<p>© <?= date('Y') ?> Pleasurehub.</p>
				<ul class="list-unstyled d-flex">
					<li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
					<li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
					<li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
				</ul>
				</div>
			</footer>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

