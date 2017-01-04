<?php

/* 

Template Name: Startup Tours

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
		<br />
		
	</div>
</div>
<div id="startup-tours">
	<div class="main-container">
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/university-testimonials' ) ); ?>
	</div>
</div>




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>