<script>
 // site main nav

  $(document).ready(function(){ 
	  $('.hamburger-btn').click(function(event) {
	    event.preventDefault();
	    $('#header-nav-container').show();
	    $('.hamburger-btn').hide();
	    $('.x-btn').show();
	  });

	  $('.x-btn').click(function(event) {
	  	event.preventDefault();
	    $('#header-nav-container').hide();
	    $('.x-btn').hide();
	    $('.hamburger-btn').show();
	  });
  });
  
</script>




<header>
	<!-- if home, remove double uncubed branding on smaller screen sizes -->
	<?php 
	if (is_home()) {
		?>
		<style type="text/css">
			@media screen and (max-width: 1023px) {
				#header-left { 
					display: none;
				}
				header #header-content {
					height: 88px;
				}
			}
		</style>
		<?php
	}
	?>
	
	<div id="header-content" class="clearfix">
		
		<div id="header-left">
			<div id="logo-container" onclick="location.href='<?php echo site_url() ?>'">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/uncubed-website-logo.jpg" alt="<?php bloginfo( 'name' ); ?>" class="logo" /></a>
			</div>
			
			<div class="nav-btns">
				<span class="hamburger-btn"><a href="#"><img src="http://uncubed.com/wp-content/uploads/2015/03/hamenu.png" width="30px"></a></span>
				<span class="x-btn"><a href="#"><img src="http://uncubed.com/wp-content/uploads/2015/03/x-btn.png" width="30px"></a></span>
			</div>

			<div id="date">
				<h6><?php 
					$date = getdate(); 
					$dow = $date['weekday'];
					$m = $date['month'];
					$d = $date['mday'];
					$y = $date['year'];
					echo $dow, ", ", $m, " ", $d, ", ", $y;
				?></h6>
			</div>
		</div>

		<div id="header-middle">
			<h1>
				<?php
					if (is_page()) {
						$length = strlen(get_the_title());
						
						if (get_the_title() == "Stories") {
							echo "Wakefield";
						}
						else if ($length > 12) {
							$short_title = get_field('shorter_title');
							if ($short_title == "") {
								?> 
									<div id="logo-container" onclick="location.href='<?php echo site_url() ?>'">
										<a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/uncubed-website-logo.jpg" alt="<?php bloginfo( 'name' ); ?>" class="logo" /></a>
									</div>
								<?php
							}
							else {
								echo $short_title;
							}
						}
						else {
							echo the_title();
						}
					}
					else if (get_post_type() == 'u') {
						$abbreviated_name = get_field('abbreviated_university_name');
						if ($abbreviated_name == "") {
							echo "Resources";
						}
						else {
							echo $abbreviated_name;
						}
					}
					else if (get_post_type() == 'edu') {
						?>
							<div id="logo-container" onclick="location.href='<?php echo site_url() ?>'">
								<a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/uncubed-website-logo.jpg" alt="<?php bloginfo( 'name' ); ?>" class="logo" /></a>
							</div>
						<?php
					}
					else if (get_post_type() == 'event') {
						echo "Events";
					}
					else if (is_single()) {
						echo "Wakefield";
					}
					else {
						?> 
							<div id="logo-container" onclick="location.href='<?php echo site_url() ?>'">
								<a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/uncubed-website-logo.jpg" alt="<?php bloginfo( 'name' ); ?>" class="logo" /></a>
							</div>
						<?php
					}
				?>
			</h1>

		</div>

		<div id="header-right">
			<div id="header-subscribe">
				<h6>Get our daily insider's <br />guide to the digital world.<br />
				<form method="post" action="<?php echo home_url(); ?>/subscribe.php">
		                <input type="text" class="email" name="email" placeholder="Enter Email Address">
										<input name="vars[username]" type="text" style="display:none;" />
		                <input type="submit" class="submit" value=">">
						<input type="hidden" name="national" value="1">
						<input type="hidden" name="vars[source]" value="header-subscribe-box" />
		                <input type="hidden" name="redirect" value="<?php echo home_url(); ?>/subscribe.php">
		        	</form>
		        </h6>
			</div>
		</div>

	</div>
	<div id="header-nav-container">
		<div id="header-nav-wrapper">
			<div id="menu-container">	
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div>
			<div id="search-container">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<div>
						<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search Uncubed.com" />
						<input type="hidden" name="post_type" value="post" />
						<input type="submit" id="searchsubmit" value=">" class="submit" />
					</div>
				</form>
			</div>
		</div>
	</div>
</header>
