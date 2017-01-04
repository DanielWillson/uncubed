<div id="testimonials">
	<div id="bar">
		<div id="block-heading-container">
			<h3>Tour Testimonials</h3>
		</div>
	</div>

	<?php $loop = new WP_Query( array( 'post_type' => 'u-testimonial', 'posts_per_page' => -1 ) ); ?>
	<div id="blocks-container" class="to-be-slid">
		<ul>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<li class="block press-block">
					<table>
						<tbody>
							<tr><td><h5><strong><?php the_title(); ?></strong></h5></td></tr>
							<tr><td class="testimonial"><h6><em><?php the_content(); ?></em></h6></td></tr>
							<tr><td class="testimonial-logo-holder">
								<div <?php if (get_post_meta($post->ID, 'logo', true)) { echo 'style="background: url(' . get_field('logo') . ') white center no-repeat; background-size: contain;"'; }?>>
								</div>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
			<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div>
</div>