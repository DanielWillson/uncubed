<div id="press">
	<div class="main-container">
		<div id="bar">
			<div id="block-heading-container">
				<h3>Press</h3>
			</div>
		</div>

		<?php $loop = new WP_Query( array( 'post_type' => 'mention', 'posts_per_page' => -1, 'meta_key' => 'featured', 'meta_value' => '1' ) ); ?>
		<div id="blocks-container" class="to-be-slid">
			<ul>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<li class="block press-block">
						<table>
							<tbody>
								<tr><td colspan="2"><h5><strong><?php echo get_post_meta($post->ID,'publication_name',true); ?></strong></h5></td></tr>
								<tr><td class="blurb" colspan="2"><p><em class="serif"><?php the_excerpt(); ?></em></p></td></tr>
								<tr>
									<td class="press-logo-holder">
										<div <?php if (has_post_thumbnail()) { echo 'style="background: url(' . wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0] . ') white center no-repeat; background-size: contain;"'; } ?>>
										</div>
									</td>
									<td class="read-more"><h5><a href="<?php echo get_post_meta($post->ID,'url',true); ?>" target="_blank">Read More</a></h5></td>
								</tr>
							</tbody>
						</table>
					</li>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="see-more-link">
			<a href="<?php echo home_url() ?>/press"><h5>See More Press →</h5></a>
		</div>
	</div>
</div>