<div id="events">
	<div class="main-container">
		<div id="bar">
			<div id="block-heading-container">
				<h3>Upcoming Events</h3>
			</div>
		</div>
		<div id="blocks-container" class="to-be-slid">
			<ul>

				<?php 
					$args = array( 
						'post_type' => 'event',
						'orderby' => 'meta_value',
						'order' => 'ASC',
						'meta_key' => 'date',
						'posts_per_page' => 9
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php 
							$title = get_field('title');
							$location = get_field('location');
							$date = get_field('date');
							$date = strtotime($date);
							$date = date('M jS Y', $date);
							$link = get_field('link');
						?>
						<li class="block" id="event">
							<table>
								<tr>
									<td class="event-title" colspan="2">
										<h4><a href="<?php echo $link ?>" alt="<?php echo $title ?>"><?php echo $title ?></a></h4>
									</td>
								</tr>
								<tr>
									<td class="event-location" colspan="2">
										<h5><?php echo $location ?></h5>
									</td>
								</tr>
								<tr>
									<td class="event-date">
										<h5><?php echo $date ?></h5>
									</td>
									<td class="event-tickets">
										<h5><a href="<?php echo $link ?>" alt="<?php echo $title ?>">Get Tickets</a></h5>
									</td>
								</tr>
							</table>		
						</li>
					<?php endwhile;
				?>
			</ul>
		</div>
		<div class="see-more-link">
			<h5><a href="<?php echo site_url() ?>/events">See All Events &rarr;</a></h5>
		</div>
	</div>
</div>