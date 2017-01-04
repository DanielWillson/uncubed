<div id="sponsors-partners">
	<div class="main-container">
		<div id="bar">
			<div id="block-heading-container">
				<h3>National Partners  &#038; Sponsors</h3>
			</div>
		</div>
		<script>
            $(function() {
            	var w = $('.sponsor-partner').css('width');
            	$('.sponsor-partner').css('height', w);

				$('.company-logo').css('width', (w * 0.9));
            });

            $(function() {
                $(window).resize(function() {
                    var w = $('.sponsor-partner').css('width');
            		$('.sponsor-partner').css('height', w);
            		$('.company-logo').css('width', (w * 0.9));
                });
            });
        </script>
		<div id="blocks-container" class="to-be-slid">
			<ul>
				<?php 
					$args = array( 
						'post_type' => 'sponsor',
						'posts_per_page' => 5
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php 
							$name = get_field('name');
							$logo = get_field('logo');
							$link = get_field('link');
						?>
						<li class="block sp-block">
							<table>
								<tr>
									<td>
										<h5><strong><?php echo $name ?></strong></h5>
									</td>
								</tr>
								<tr>
									<td class="press-logo-holder">
										<div style="background: url('<?php echo $logo ?>') center no-repeat; background-size: contain;">
										</div>
									</td>
								</tr>
							</table>
						</li>
					<?php endwhile;
				?>
			</ul>
		</div>
	</div>
</div>
