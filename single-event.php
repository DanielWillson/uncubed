<?php
/**
 * The Template for displaying single events
 */
Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header'));
Starkers_Utilities::get_template_parts( array(  'parts/shared/header' ) );
if ( have_posts() ) while ( have_posts() ) : the_post();
?>
<!-- <div id="event-frame-wrapper">
	<iframe class='event-frame' src='<?php get_field() ?>'>
</div> -->
<?php
endwhile;