<?php
/* 
Template Name: Wakefield
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="editorial-no-see-more">
	<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/home-editorial') ); ?>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/editorial-list') ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>