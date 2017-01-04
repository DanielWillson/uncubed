<?php

/* 

Template Name: Testimonials Page

*/

?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<div class="main-container">

	<h3><strong>Testimonials</strong></h3>
	<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => -1 ) ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="mention clearfix" onclick="location.href='<?php echo get_post_meta($post->ID,'url',true); ?>'">
			<div class="presslogo" <?php echo 'style="background: url(' . get_field('logo') . ') white center no-repeat; background-size: contain;"'; ?>></div>
			<h6><strong><?php the_title(); ?></strong></h6>
			<?php the_content(); ?>
			<a href="<?php echo get_post_meta($post->ID,'url',true); ?>"><strong>Meet <?php echo the_title(); ?> >></strong></a>
		</div>

	<?php endwhile; wp_reset_query(); ?>

</div>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
