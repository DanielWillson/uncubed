<script>
$(function() {
	var count = $('.carousel-item').length;
	var i = count;
	function cycle() {
		if ((i%count) === 0) { $($('#carousel ul li:nth-child(' + (count) + ')')).fadeOut( {queue: false, duration: 'slow' } ); }
		else { $($('#carousel ul li:nth-child(' + (i % count) + ')')).fadeOut( {queue: false, duration: 'slow' } );	}
		
		if ( ((i+1) % count) === 0) { $($('#carousel ul li:nth-child(' + (count) + ')')).fadeIn( {queue: false, duration: 'slow' } ); }
		else { $($('#carousel ul li:nth-child(' + ((i+1) % count) + ')')).fadeIn( {queue: false, duration: 'slow' } ); }

		i += 1;
	}
	if (count > 1) {
		window.setInterval(cycle, 9000);
	}
});
</script>

<div id="carousel">
	<ul>
		<?php 
			$args = array( 'post_type' => 'carousel-item' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php 
					$image = get_field('image');
					$link = get_field('link');
					$heading = get_field('heading');
					$subheading = get_field('subheading');
				?>
				<li class="carousel-item animated" style="background-color: #000000; 
					background: url('<?php echo $image ?>') no-repeat center center fixed; 
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					background-size: cover;
					-moz-box-shadow:    inset 0 10px 10px -8px #000000; 
    				-webkit-box-shadow: inset 0 10px 10px -8px #000000;
     				box-shadow:     	inset 0 10px 10px -8px #000000;
					">
					<div class="overlay"></div>
					<div class="main-container">
						<h2 style="font-size: 2em !important;"><a href="<?php echo $link; ?>"><?php echo $heading; ?></a></h2>
						<h5><?php echo $subheading ?></h5>
					</div>					
				</li>
			<?php endwhile;
		?>


		<!--RECENT EVENT CAROUSEL ITEM -->

		<?php 
			$args = array( 
				'post_type' => 'event',
				'orderby' => 'meta_value',
				'order' => 'ASC',
				'meta_key' => 'date',
				'posts_per_page' => 2 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php 
					$title = get_field('title');
					$location = get_field('location');
					$date = get_field('date');
					$date = strtotime($date);
					$dateNumber = date('j', $date);
					$dateMonth = date('M', $date);
					$longdate = date('M jS Y', $date);
					$link = get_field('link');
					$image = get_field('image');
				?>
				<li class="carousel-item animated event" style="background-color: #000000; 
					background: url('<?php echo $image ?>') no-repeat top center fixed; 
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					background-size: cover;
					-moz-box-shadow:    inset 0 10px 10px -8px #000000; 
    				-webkit-box-shadow: inset 0 10px 10px -8px #000000;
     				box-shadow:     	inset 0 10px 10px -8px #000000;
					">
					<div class="overlay"></div>
					<div class="main-container">
						<h2><a href="<?php echo $link; ?>" target="_blank"><?php echo $title; ?></a></h2>
						<h5><?php $subheading = get_field('subheading'); echo $longdate ?> at <?php echo $location ?> - <a href="<?php echo site_url(); ?>/events">see all upcoming events &rarr;</a></h5>
					</div>					
				</li>
			<?php endwhile;
		?>

		

		<!--RECENT ARTICLE CAROUSEL ITEM -->

		<?php 
			$args = array( 'posts_per_page' => 2 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<li class="carousel-item animated article" style="background-color: #000000; 
					background: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>') no-repeat top center fixed; 
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					background-size: cover;
					-moz-box-shadow:    inset 0 10px 10px -8px #000000; 
    				-webkit-box-shadow: inset 0 10px 10px -8px #000000;
     				box-shadow:     	inset 0 10px 10px -8px #000000;
					">
					<div class="overlay"></div>
					<div class="main-container">
						<h2 style="font-size: 2em !important;"><a href="<?php esc_url( the_permalink() ); ?>">New Story: <?php the_title(); ?></a></h2>
						<h5><?php $subheading = get_field('subheading'); echo $subheading ?> - <a href="<?php echo the_permalink(); ?>">read more &rarr;</a></h5>
					</div>					
				</li>
			<?php endwhile;
		?>


	</ul>
	<div id="tagline-container">
		<div class="main-container">
			<h1>Discover, learn, and work.</h1>
			<h5>Uncubed connects forward-thinking folks with next-gen companies.</h5>
		</div>
	</div>
</div>
