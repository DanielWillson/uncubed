<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

	<div class="error-page-main-container">
	  <div class="error-main-text">
	    <h2>Hmm. There's nothing here.</h2>
	    <h4>But there could be.</h4>
	    <h4><a href="mailto:contact@uncubed.com" class="error-contact-us">Email us</a> for advertising opportunities.</h4>
	  </div>
	</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>