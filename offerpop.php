<?php

/* 

Template Name: Offerpop

*/

?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="full-width-page">
  <div style="width: 100%; background-image: url(<?php the_field('offerpop_background_image'); ?>); background-size: cover; -moz-background-size: cover; -o-background-size: cover; -webkit-background-size: cover;">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="bar">
        <div>

        </div>
      </div>

      <?php the_content(); ?>

    <?php endwhile; ?>

  </div>
</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>













