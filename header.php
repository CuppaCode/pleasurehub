<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

    <div class="d-none d-md-block announcement-bar py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="announcement-bar__list">
                        <li>
                            <i class="bi bi-telephone rounded-circle"></i>
                            <a href="tel: +31 642 12 231">+31 642 12 231</a>
                        </li>

                        <li>
                            <i class="bi bi-envolope rounded-circle"></i>
                            <a href="mailto:info@ewmaterialen.nl">info@ewmaterialen.nl</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 d-flex justify-content-end">
                    <ul class="announcement-bar__list">
                        <li>
                            <i class="bi bi-truck rounded-circle"></i> Gratis verzending
                        </li>

                        <li>
                            <i class="bi bi-clock-history rounded-circle"></i> 30 dagen niet goed geld terug
                        </li>

                        <li>
                            <i class="bi bi-person rounded-circle"></i> 24/7 klant support
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar end -->
