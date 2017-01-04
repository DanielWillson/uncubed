<!-- starts with sixth article -->
<div id="editorial-list-container" class="clearfix">
	<div class="main-container">
		<div id="editorial-list">
			<?php if ( have_posts() ): ?>
			<ul>
				<?php 
				query_posts( array ( 'posts_per_page' => 15 ) );
				while ( have_posts()) : the_post(); ?>
					<li>
						<div class="featured-image">
							<a href="<?php esc_url( the_permalink() ); ?>" alt="">
								<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="" />
							</a>
						</div>
						<div class="post-info">
							<?php 
								$curr_id = get_the_ID();
								//Gets categories / old national vs. ny tags
								$category_list = get_the_category_list(' | ', '', $curr_id );
								$category = '';
								$category_link = home_url() . '/category/';
								//Gets new ny/national edition 
								$edition_list = wp_get_post_terms($curr_id, 'edition', array("fields" => "names"));
								//****Below logs tags if you'd like
								// echo "<script>console.log('new post');</script>";
								// foreach ($edition_list as $ed_tag){
								// 	echo "<script>console.log('" . $ed_tag . "');</script>";
								// }
								//*****End console logging 
								if ( strpos($category_list, 'NY Edition') !== False ||
									strpos($edition_list[0], 'New York') !== False ) {
									$category = 'NY Edition';
									$category_link .= 'ny-edition/';
								}
								else if (strpos($category_list, 'National Edition') !== FALSE ||
										strpos($edition_list[0], 'National') !== False) {
									$category = 'National Edition';
									$category_link .= 'national-edition/';
								}
								else {
									$category = 'Uncubed Edition';
									$category_link .= 'uncubed/';
								}
							?>
							<h6 class="post-category"><a href="<?php echo $category_link ?>"><?php echo $category; ?></a><?php echo ' | '; echo get_the_date(); ?></h6>
							<h5 class="subheading"><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php $subheading = get_field('subheading'); echo $subheading ?></a></h5>
							<p class="excerpt"><?php echo $new_excerpt ?></p>
							<br />
							<p><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">Read more &rarr;</a></p>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
			<?php else: ?>
			<h2>No posts to display</h2>
			<?php endif; ?>
		</div>
		<div class="see-more-link left">
			<h5><a href="<?php echo home_url(); ?>/archives/page/2/">&larr; More articles</a></h5>
		</div>
		<!-- <div class="see-more-link right">
			<h5><a href="<?php echo home_url(); ?>/archives/page/2/">More articles &rarr;</a></h5>
		</div> -->
	</div>
</div>