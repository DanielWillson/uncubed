<?php

/* 

Template Name: Press Page

*/

?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<div class="main-container">
	<div id="bar">
		<div id="block-heading-container">
			<h3>Uncubed in the Press</h3>
		</div>
	</div>
	<div id="editorial-list">
		<ul>
			<?php $loop = new WP_Query( array( 'post_type' => 'mention', 'posts_per_page' => -1 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<li class="clearfix">
					<div class="featured-image">
					<img class="press-featured-image" height="200px" src="<?php if (has_post_thumbnail()) { echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; } ?>">
					</div>
						<div class="post-info">
							<h6 class="post-category"><?php echo get_field('publication_name'); ?></h6>
							<h4 class="heading">
								<a href="<?php echo get_field('url'); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h4>
							<h6 class="subheading"><?php the_excerpt(); ?></h6>
						</div>
					</li>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
		</div>
	</div>



	<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
