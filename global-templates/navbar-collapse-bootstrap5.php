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

<nav id="navigation1" class="navigation <?php echo esc_attr( $container ); ?>">
        <!-- Logo Area Start -->
        <div class="nav-header">
          <div class="nav-toggle"></div>
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

		// Dump the menu, if need be...
		// echo '<pre>';
		// var_dump($top_level_menu);
		// echo '</pre>';



		$menu_list .= '<ul class="nav-menu">' ."\n";
		//$parent = $menu_item->ID;
		

		foreach( $top_level_menu as $menu_item ) {

			if( count($menu_item->children) > 0) {

				//$menu_list .= '<li class="'. $submenu->classes[0] .'"><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";

			} else {

				$menu_list .= '<li>' ."\n";
				$menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
				$menu_list .= '</li>' ."\n";

			}
		}
		if( $bool == true && count( $menu_array ) > 0 ) {
			

			$menu_list .= '<li>' ."\n";
			$menu_list .= '<a href="#">' . $menu_item->title ."\n";
			$menu_list .= '<div class="megamenu-panel"><div class="megamenu-lists">';
			if ( $menu_item->classes[0] == 'submenu-parent' ) {
				$menu_list .= '<ul class="megamenu-list list-col-4">' ."\n";
			}
			
			$menu_list .= implode( "\n", $menu_array );
			$menu_list .= '</ul>' ."\n";
			$menu_list .= '</div></div>';
			
		}
         
        $menu_list .= '</ul>' ."\n";

		echo $menu_list;
 
		?>
        </div>

		
      </nav>
