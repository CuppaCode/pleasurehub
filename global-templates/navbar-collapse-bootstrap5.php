<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="navigation1" class="navigation d-flex d-md-block justify-content-between align-items-center <?php echo esc_attr( $container ); ?>">
        <!-- Logo Area Start -->
        <div class="nav-header justify-content-start">
          <div class="nav-toggle"></div>
        </div>

		<div class="d-flex d-md-none site-header__logo ps-5">
		<?php the_custom_logo(); ?>
		</div>

		<div class="cart d-flex d-md-none justify-content-center justify-content-md-end align-items-center py-2">
			<a class="d-flex align-items-center" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
				<i class="bi bi-person fs-4"></i>
			</a>
			<a class="d-flex align-items-center" href="#">
				<i class="bi bi-heart fs-4"></i>
			</a>
			<a class="d-flex align-items-center parent-cart-count" href="<?php echo wc_get_cart_url(); ?>">
				<i class="bi bi-bag-dash fs-4"><div class="cart-count"><span><?php echo WC()->cart->get_cart_contents_count(); ?></span></div></i>
			</a>
                    
        </div>
        <!-- Search panel Start -->
        
        <!-- Main Menus Wrapper -->
        <div class="nav-menus-wrapper">
		<?php 
		

		$menu_items = wp_get_nav_menu_items('menu-1',array ( 'post_type' => 'nav_menu_item'));
		$menu_list = '';
		$bool = false;
		
		// Determine first level menu items
		foreach( $menu_items as $menu_item ) {
			if( $menu_item->menu_item_parent == 0 ) {
				
				$top_level_menu[$menu_item->ID] = $menu_item;
				$top_level_menu[$menu_item->ID]->children = [];
			} else {
				$lower_level_menu[] = $menu_item;
			}
		}

		// Determine second level menu items
		if(count($lower_level_menu) > 0){

			foreach( $lower_level_menu as $lower_id => $lower_level_menu_item ) {
				

				foreach($top_level_menu as $id => $top_level_menu_item) {
					
					if($lower_level_menu_item->menu_item_parent == $id) {

						$top_level_menu[$id]->children[$lower_level_menu_item->ID] = $lower_level_menu_item;
						$top_level_menu[$id]->children[$lower_level_menu_item->ID]->children = [];
						unset($lower_level_menu[$lower_id]);

					}
					
				}

			}

		}

		// Determine third level menu items
		if(count($lower_level_menu) > 0){

			foreach( $lower_level_menu as $lower_id => $lower_level_menu_item ) {
				

				foreach($top_level_menu as $id => $top_level_menu_item) {
					
					if(count($top_level_menu_item->children) > 0) {

						foreach($top_level_menu_item->children as $second_level_id => $second_level_item){

							if($lower_level_menu_item->menu_item_parent == $second_level_id) {

								$second_level_item->children[$lower_id] = $lower_level_menu_item;
								unset($lower_level_menu[$lower_id]);

							}

						}

					}
					
				}

			}

		}
 
		?>

		<ul class="nav-menu">

			<?php foreach( $top_level_menu as $item ): ?>

				<li class="<?= $item->classes[0] ?>">
					<a href="<?= $item->url ?>">
						<?= $item->title ?>
					</a>

					<?php $child_count = count($item->children); ?>

					<?php if ($child_count > 0): ?>
						
						<div class="megamenu-panel">

							<div class="megamenu-lists">

								<?php 
									
									$col_class = 'list-col-5';

									if($child_count < 5):

										$col_class = 'list-col-'.$child_count;

									endif;

								?>
								
								<?php foreach ($item->children as $child): ?>

									<ul class="megamenu-list <?= $col_class ?>">

										<li class="megamenu-list-title">
											<a href="<?= $child->url ?>">
												<?= $child->title ?>
											</a>
										</li>

										<?php $grand_child_count = count($child->children); ?>

										<?php if ( $grand_child_count > 0): ?>

											<?php foreach ($child->children as $child): ?>

												<li>
													<a href="<?= $child->url ?>">
														<?= $child->title ?>
													</a>
												</li>

											<?php endforeach; ?>

										<?php endif ?>

									</ul>

								<?php endforeach; ?>

							</div>

						</div>

					<?php endif; ?>
				</li>

			<?php endforeach; ?>

		</ul>
        </div>

		
      </nav>
