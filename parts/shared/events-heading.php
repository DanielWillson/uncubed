<div id="events-heading-container" class="clearfix" style="background-color: #000000; 
	background: url('<?php echo site_url() ?>/wp-content/themes/uncubed/images/uncubed-crowd.jpg') no-repeat center center; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;">
	<div id="events-heading" class="clearfix">
		<div id="events-tagline">
			<img src="<?php echo site_url() ?>/wp-content/themes/uncubed/images/white-uncubed-logo.png" alt="Uncubed" />
			<h6>Connecting you to the world's most exciting companies in a creative and interactive day of classes, demos, and company interactions.</h6>
			<br />
			<br />
			<h6>Select an event to the right or scroll down to learn more about our events.</h6>
			<br />
		</div>
		<div class="table-list">
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
						$event_link = get_field('event_link');
					?>
					<a href="<?php echo $event_link ?>" alt="<?php echo $title ?>" target="_blank">
					<tr class="list-row">
						<td class="circle-content">
							<div>
								<a href="<?php echo $event_link ?>" alt="<?php echo $title ?>" target="_blank">
									<p class="date-number"><?php echo $dateNumber ?></p>
									<p class="date-month"><?php echo $dateMonth ?></p>
								</a>
							</div>
						</td>
						<td class="list-details">
							<a href="<?php echo $event_link ?>" alt="<?php echo $title ?>" target="_blank">
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
	</div>
</div>