	<footer>
		<div id="bar">
			<div id="logo-container">
				<img id="wakefieldlogo" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/wakefieldcircle.png" alt="WAKEFIELD" />
			</div>
		</div>
		<h3 id="subscribe-header">Subscribe to Wakefield, Uncubed's Daily Email</h3>
		<h6 id="subscribe-blurb">Get the inside scoop on next generation companies, new tech, and unique job opportunities.</h6>
		<br />
		<div class="footer-subscribe">
			<h5><form method="post" class="clearfix" action="<?php echo home_url(); ?>/subscribe.php">
                    <input type="text" class="email" name="email">
                    <input name="vars[username]" type="text" style="display:none;" />
                    <input type="hidden" name="vars[source]" value="footer-subscribe-box" />
                    <strong><input type="submit" class="submit" value=">"></strong>
                    <input type="hidden" name="redirect" value="<?php echo home_url(); ?>/subscribe.php">
            </form></h5>
		</div>
		<div class="main-container">
			<div id="social-footer"><?php Starkers_Utilities::get_template_parts( array( 'parts/share-this-page' ) ); ?><br/></div>
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</div>
		<br />
	</footer>
