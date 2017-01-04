<?php
/* 
Template Name: Uncubed Events
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php Starkers_Utilities::get_template_parts( 
                                array( 
                                  'parts/shared/events-heading', 
                                  'parts/shared/press', 
                                  'parts/shared/companies-speakers', 
                                  'parts/shared/events-unique-companies', 
                                  'parts/shared/testimonials', 
                                  'parts/shared/partners-art' 
                                ) ); ?>

<div id="events-events-page">
  <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/events') ); ?>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/uncubed-video-teaser', 'parts/shared/footer','parts/shared/html-footer') ); ?>