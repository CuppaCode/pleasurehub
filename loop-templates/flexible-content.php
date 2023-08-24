<?php

    $flexible_content = get_field('flexible_content', $post->ID);

    if ( $flexible_content ):

        foreach( $flexible_content as $item) :

            switch( $item['acf_fc_layout'] ) :
                
                case 'jumbotron':

                    get_template_part('template-parts/jumbotron', '', $item );

                    break;

                case 'products':

                    get_template_part('template-parts/products', '', $item );

                    break;

                case 'categories':

                    get_template_part('template-parts/categories', '', $item );

                    break;

                case 'carousel':

                    get_template_part('template-parts/carousel', '', $item );

                    break;

                case 'banner':

                    get_template_part('template-parts/banner', '', $item );

                    break;

                case 'text_block':

                    get_template_part('template-parts/text-block', '', $item );

                    break;

                default:

                    //

                    break;

            endswitch;

        endforeach;

    endif;

?>