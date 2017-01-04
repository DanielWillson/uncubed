<div id="editorial" class="clearfix">
	<div class="main-container">
		<div id="bar">
			<div id="block-heading-container">
				<h3>Latest Articles</h3>
			</div>
		</div>
		<div id="editorial-home">
			<?php if ( have_posts() ): ?>
			<ul>
				<?php 
				query_posts( array ( 'posts_per_page' => 5 ) );
				while ( have_posts()) : the_post(); ?>
					<li style="background-color: #000000; 
					background: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>') no-repeat center top; 
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;" 
					onclick='<?php echo "location.href=\"" . esc_url( get_permalink() ) . "\"" ?>'>
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
						<div class="post-info">
							<h6 class="subheading"><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h6>
							<h6 class="post-category"><a href="<?php echo $category_link ?>"><?php echo $category; ?></a></h6>
						</div>
					
					</li>
					</a>
				<?php endwhile; ?>
			</ul>
			<?php else: ?>
			<h2>No posts to display</h2>
			<?php endif; ?>
		</div>
		<div class="see-more-link">
			<h5><a href="http://uncubed.com/stories" alt="Wakefield Stories">See More Stories &rarr;</a></h5>
		</div>
	</div>
</div>