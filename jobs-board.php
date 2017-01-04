<?php
/**
 * Template Name: Jobs Board
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header')); ?>
<div id="job-board-page">
	<?php Starkers_Utilities::get_template_parts( array(  'parts/shared/header' ) ); ?>
</div>
<div id="event-frame-wrapper" class="job-board">
	<iframe class='event-frame' src='<?php echo site_url() ?>/jobs'>
</div>
