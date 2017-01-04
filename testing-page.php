<?php

/* 

Template Name: Testing Page

*/

?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<div class="main-container clearfix">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="bar">
		<div id="block-heading-container">
			<h3><?php the_title(); ?></h3>
		</div>
	</div>
	<br />
	
	<div class="table-list popular-posts clearfix">
		<table>
			<tr class="list-row">
				<?php the_content(); ?>
			</tr>
		</table>
		<table>
			<tr>
				<td class="table-header" colspan="2">
					<h5>Upcoming Events</h5>
				</td>
			</tr>
			<!-- WHILE LOOP BEGINS -->
			<?php 
			$args = array( 
				'post_type' => 'event',
				'orderby' => 'meta_value',
				'order' => 'ASC',
				'meta_key' => 'date',
				'posts_per_page' => 5
			);
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
				?>
				<a href="<?php echo $link ?>" alt="<?php echo $title ?>" target="_blank">
				<tr class="list-row">
					<td class="circle-content">
						<div>
							<a href="<?php echo $link ?>" alt="<?php echo $title ?>" target="_blank">
								<p class="date-number"><?php echo $dateNumber ?></p>
								<p class="date-month"><?php echo $dateMonth ?></p>
							</a>
						</div>
					</td>
					<td class="list-details">
						<a href="<?php echo $link ?>" alt="<?php echo $title ?>" target="_blank">
							<h6><span class="heading"><?php echo $title ?></span> | <span class="long-date"><?php echo $longdate ?></span></h6>
							<h6><span class="subheading"><?php echo $location ?></span></h6>
						</a>
					</td>
				</tr>
				</a>
			<?php endwhile;?>
			<!-- WHILE LOOP ENDS -->
		</table>
	</div>


	<?php endwhile; ?>

</div>




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>