<?php

/* 

Template Name: Full Width

*/

?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div id="full-width-page">
	<div class="main-container">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div id="bar">
			<div id="block-heading-container">
				<h3><?php the_title(); ?></h3>
			</div>
		</div>
		<br />
		
			<?php the_content(); ?>

		<?php endwhile; ?>

	</div>
</div>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>