<div id="testimonials">
	<div class="main-container">
		<div id="bar">
			<div id="block-heading-container">
				<h3>Testimonials</h3>
			</div>
		</div>

		<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => -1 ) ); ?>
		<div id="blocks-container" class="to-be-slid">
			<ul>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<li class="block press-block">
						<table>
							<tbody>
								<tr><td colspan="2"><h5><strong><?php the_title(); ?></strong></h5></td></tr>
								<tr><td class="testimonial" colspan="2"><p><em class="serif"><?php the_content(); ?></em></p></td></tr>
								<tr>
									<td class="testimonial-logo-holder">
										<div <?php if (get_post_meta($post->ID, 'logo', true)) { echo 'style="background: url(' . get_field('logo') . ') white center no-repeat; background-size: contain;"'; }?>>
										</div>
									</td>
									<td class="meet"><h5><a href="<?php echo get_post_meta($post->ID,'url',true); ?>" target="_blank">Meet <?php echo the_title(); ?></a></h5></td>
								</tr>
							</tbody>
						</table>
					</li>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="see-more-link">
			<a href="<?php echo home_url() ?>/testimonials"><h5>See More Testimonials →</h5></a>
		</div>
	</div>
</div>