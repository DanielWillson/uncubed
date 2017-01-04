<?php

/* 

Template Name: About Us

*/

?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div id="about-us-page" class="clearfix">
	<div id="top-image" style="background: url('<?php echo home_url() ?>/wp-content/themes/uncubed/images/about-us.jpg') center center no-repeat fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;">
		<div class="main-container">
			<div id="blurb">
				<h4>Uncubed connects you with exciting companies through content, classes, conferences, and jobs.</h4>
			</div>
		</div>
	</div>

	<div class="main-container">
		<div id="about-article">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
			<?php the_content(); ?>

			<?php endwhile; ?>
		</div>
		<div id="team-info">
			<ul>
				<?php 
					$args = array( 
						'post_type' => 'team-member',
						'orderby' => 'meta_value',
						'order' => 'ASC',
						'meta_key' => 'type',
						'posts_per_page' => -1
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						$name = get_field('name');
						$name_lowercase = strtolower(str_replace(' ', '-', $name));
						$title = get_field('title');
						$twitter = get_field('twitter');
						$twitter_url = 'http://twitter.com/' . $twitter;
						$headshot = get_field('headshot');
				?>
				<li class="team-member clearfix <?php echo $name_lowercase ?>">
					<div class="headshot" style="background: url('<?php echo $headshot ?>') no-repeat; background-size: contain;">
					</div>
					<div class="info">
						<p class="name"><?php echo $name ?></p>
						<p class="title"><?php echo $title ?></p>
						<p class="twitter"><a href="<?php echo $twitter_url ?>" target="_blank" alt="<?php echo $name ?>"><?php echo $twitter ?></a></p>
					</div>
				</li>
				<?php endwhile;?>
			</ul>
		</div>
	</div>
</div>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/events', 'parts/shared/jobs', 'parts/shared/footer','parts/shared/html-footer' ) ); ?>