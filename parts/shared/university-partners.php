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
<div id="blocks-container" class="to-be-slid u-partners">
	<ul>
		<?php 
			$args = array( 
				'post_type' => 'u',
				'posts_per_page' => -1
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php  
					$name = get_field('university_name');
					$logo = get_field('logo');
					$link = get_field('link');
				?>
				<li class="block">
          <a href="<?php echo $link?>" target="_blank" style="text-decoration: none; color: #000;">
  					<table>
  						<tr>
  							<td class="name">
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
          </a>
				</li>
			<?php endwhile;
		?>
	</ul>
</div>