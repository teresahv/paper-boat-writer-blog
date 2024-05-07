<?php
if ( !function_exists( 'pbw_show_post_types_in_loop' ) ):
  function pbw_show_post_types_in_loop ( $query ) {
    // que no sea el admin y sea el query principal
    if ( !is_admin() && $query->is_main_query() ):
      $query->set( 'post_type', array( 'post', 'page', 'cuidados' ) );
    endif;
  }
endif;

add_action( 'pre_get_posts', 'pbw_show_post_types_in_loop' );
?>