<?php 
  // get all post categories 
  $cats = get_categories();
  if ( !empty( $cats ) ) {
    echo '<div class="page-header page-top-header">';
    echo '<select class="myselect">';
    echo '<option data-url="' . get_home_url() .  '">All</option>';
    foreach ( $cats as $cat ) {
      $cat_id = $cat->term_id;
      $cat_name = $cat->name;
      $cat_link = get_category_link( $cat_id );
      echo '<option data-url="' . $cat_link . '">' . $cat_name . '</option>';
    }
    echo '</select>';
    echo '</div>';
  }
?>