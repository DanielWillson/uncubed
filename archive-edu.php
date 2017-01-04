<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts() 
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="archive">
	<div class="main-container">
		<div id="bar">
			<div id="block-heading-container">
				<?php if ( have_posts() ): ?>
				<h3>Education Uncubed Posts</h3>
			</div>
		</div>
		<div id="editorial-list">
			<ul>
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
			query_posts( array ( 
				'posts_per_page' => 15,
				'paged' => $paged,
				'post_type' => 'edu'
			) );
			while ( have_posts() ) : the_post(); ?>
				<li>
					<?php 
						$category_list = get_the_category_list(' | ', '', get_the_ID());
						$category = '';
						$category_link = home_url() . '/category/';
						if (strpos($category_list, 'NY Edition') !== FALSE) {
							$category = 'NY Edition';
							$category_link .= 'ny-edition/';
						}
						else if (strpos($category_list, 'National Edition') !== FALSE) {
							$category = 'National Edition';
							$category_link .= 'national-edition/';
						}
						else {
							$category = 'Education Edition';
							$category_link .= 'uncubed/';
						}
					?>
					<div class="featured-image">
						<a href="<?php esc_url( the_permalink() ); ?>" alt="">
							<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="" />
						</a>
					</div>
					<div class="post-info">
						<h6 class="post-category"><a href="<?php echo $category_link ?>"><?php echo $category; ?></a><?php echo ' | '; echo get_the_date(); ?></h6>
						<h4 class="heading"><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
						<h6 class="subheading"><?php $subheading = get_field('subheading'); echo $subheading ?></h6>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>
		</div>
		<div id="pagination" class="clearfix">
			<div class="nav-previous"><h5><?php next_posts_link( '&larr; Older stories' ); ?></h5></div>
			<div class="nav-next"><h5><?php previous_posts_link( 'Newer stories &rarr;' ); ?></h5></div>
		</div>
					
		<?php else: ?>
		<h2>No posts to display</h2>	
		<?php endif; ?>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>