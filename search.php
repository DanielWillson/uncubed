<?php
/**
 * Search results page
 * 
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="search">
	<div class="main-container">
		<div id="bar">
			<div id="block-heading-container">
				<?php if ( have_posts() ): ?>
				<h3>Search Results for '<?php echo get_search_query(); ?>'</h3>
			</div>
		</div>
		<div id="editorial-list">
			<ul>
			<?php 
			$search = get_search_query();
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
			query_posts( array ( 
				'posts_per_page' => 15,
				'paged' => $paged,
				's' => $search
			) );
			while ( have_posts() ) : the_post(); ?>
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
						<h6 class="post-category"><a href="<?php echo $category_link; ?>"><?php echo $category; ?></a> | <?php the_date() ?></h6>
						<h4 class="heading"><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
						<h6 class="subheading"><?php $subheading = get_field('subheading'); echo $subheading ?></h6>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>
		</div>
		<div id="pagination" class="clearfix">
			<div class="nav-previous"><h5><?php next_posts_link( '&larr; More results' ); ?></h5></div>
			<div class="nav-next"><h5><?php previous_posts_link( 'Previous results &rarr;' ); ?></h5></div>
		</div>
		<?php else: ?>
		<h2>No posts to display in <?php echo get_search_query(); ?></h2>
		<?php endif; ?>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>