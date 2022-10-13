<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
					
					<?php
					// Start the loop.
					while ( have_posts() ) :
						the_post(); ?>

						<?php $product = wc_get_product( get_the_id() ); ?>
						
						<div class="col">
							<div class="card">
								<img src="..." class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title"><?php get_the_title() ?></h5>
									<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
							</div>
						</div>
						
					<?php endwhile; ?>

					</div>
				 	<?php else:

					get_template_part( 'loop-templates/content', 'none' );
				endif;
				?>

			</main><!-- #main -->

			<?php
			// Display the pagination component.
			understrap_pagination();
			// Do the right sidebar check.
			//get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
