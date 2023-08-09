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
    
    <!-- Hotjar Tracking Code for https://pleasurehub.nl -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3506362,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
    <div class="d-none d-md-block top-menu-bar py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="usp-bar__list">
                        <li>
                            <i class="bi bi-truck"></i> Snelle levering
                        </li>

                        <li>
                            <i class="bi bi-check"></i> Kwaliteits producten
                        </li>

                        <li>
                            <i class="bi bi-box-seam"></i> Discreet verzonden
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <ul class="service-bar__list">
                        <li>
                            <a href="#">Klantenservice</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-md-block announcement-bar py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span> <?php the_field('announcementheader', 'option'); ?> </span>
                </div>
            </div>
        </div>
    </div>

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar" class="site-header">

        <div class="container py-2 d-none d-md-block">
            <div class="row align-items-center justify-content-end justify-content-md-start">

                <div class="d-none d-md-flex col-md-4 site-header__logo justify-content-center justify-content-md-start pb-2">
                    <!-- Plek voor custom logo -->
                    <?php the_custom_logo(); ?>
                </div>
                
                <div class="d-none d-md-flex col-6 col-md-5 pb-2 search-barr">
                    <?php aws_get_search_form( true ); ?>
                </div>

                <div class="d-none col-md-3 cart d-md-flex justify-content-center justify-content-md-end align-items-center py-2">
                    <a class="d-flex align-items-center" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
                        <i class="bi bi-person fs-4"></i>
                        <span><?php _e('Mijn Account'); ?></span>
                    </a>
                    <a class="d-flex align-items-center" href="#">
                        <i class="bi bi-heart fs-4"></i>
                        <span><?php _e('Wishlist'); ?></span>
                    </a>
                    <a class="d-flex align-items-center parent-cart-count" href="<?php echo wc_get_cart_url(); ?>">
                        <i class="bi bi-bag-dash fs-4"><div class="cart-count"><span><?php echo WC()->cart->get_cart_contents_count(); ?></span></div></i>
                        <span><?php _e('Winkelwagen'); ?></span>
                    </a>
                    
                </div>
            </div>
        </div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar end -->
