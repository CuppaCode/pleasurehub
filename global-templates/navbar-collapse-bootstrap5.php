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
		
		echo '<pre>';
		var_dump( wp_get_nav_menu_items('menu-1',array ( 'post_type' => 'nav_menu_item')) );
		echo '</pre>';

		$menu_items = wp_get_nav_menu_items('menu-1',array ( 'post_type' => 'nav_menu_item'));
		$menu_list = '';
		$bool = false;

		$menu_list .= '<ul class="nav-menu">' ."\n";
		foreach( $menu_items as $menu_item ) {
			if( $menu_item->menu_item_parent == 0 ) {
				
				$top_level_menu[] = $menu_item;
			} else {
				$lower_level_menu[] = $menu_item;
			}
		}

		foreach( $lower_level_menu as $lower_level_menu_item ) {
			if ( $lower_level_menu_item->classes[0] == 'submenu-parent' ) {
				$header_submenu[] = $lower_level_menu_item;
			} else {
				
			}

		}


			// 	$parent = $menu_item->ID;
				
			// 	$menu_array = array();
			// 	foreach( $menu_items as $submenu ) {
			// 		if( $submenu->menu_item_parent == $parent ) {
			// 			$bool = true;
			// 			$menu_array[] = '<li class="'. $submenu->classes[0] .'"><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
			// 		}
			// 	}
			// 	if( $bool == true && count( $menu_array ) > 0 ) {
					

			// 		$menu_list .= '<li>' ."\n";
			// 		$menu_list .= '<a href="#">' . $menu_item->title ."\n";
			// 		$menu_list .= '<div class="megamenu-panel"><div class="megamenu-lists">';
			// 		if ( $menu_item->classes[0] == 'submenu-parent' ) {
			// 			$menu_list .= '<ul class="megamenu-list list-col-4">' ."\n";
			// 		}
					
			// 		$menu_list .= implode( "\n", $menu_array );
			// 		$menu_list .= '</ul>' ."\n";
			// 		$menu_list .= '</div></div>';
					
			// 	} else {
					
			// 		$menu_list .= '<li>' ."\n";
			// 		$menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
			// 	}
				
			// }
			
			// end <li>
		// 	$menu_list .= '</li>' ."\n";
        // }
         
        $menu_list .= '</ul>' ."\n";

		echo $menu_list;
 
		?>
        </div>

		
      </nav>
