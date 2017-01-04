<?php

/* 

Template Name: Manage Subscriptions

*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<script type="text/javascript">if (_ouibounce) { _ouibounce.disable(); }</script>
<div class="main-container">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="bar">
			<div id="block-heading-container">
				<h3><?php the_title(); ?></h3>
			</div>
		</div>
		<?php
		if ($_GET['bademail'] === '1') {
			echo "<div class='flash error'><p>Really? That's not an email address.</p><br><img width='250px' height='141px' src='" . home_url() . "/wp-content/themes/uncubed/images/really.gif'></div>";
		} else {

			if ($_GET['new'] === '1') {
				echo '<div class="flash surprise"><h5>Welcome to the <em>National Edition</em> of Wakefield by Uncubed.</h5><p>You\'re about to be connected with new companies, products, and jobs from all over this fine nation.</p><p>You can manage your subscriptions below.</p></div>';
			}

			if ($_GET['confirm'] === '1') {
				echo "<div class='flash success'><h5>We've updated your subscriptions:</h5><ul>";

				if ($_GET['national'] === '1') {
					echo '<li><p class="bullet">&#10004;</p><p> National Edition</p></li>';
				} 
				// else {
				// 	echo '<li><p class="bullet">&#x2717;</p><p> National Edition</p></li>';
				// }

				if ($_GET['ny'] === '1') {
					echo '<li><p class="bullet">&#10004;</p><p> NY Edition</p></li>';
				} 
				// else {
				// 	echo '<li><p class="bullet">&#x2717;</p><p> NY Edition</p></li>';
				// }
				
				echo "</ul><p>You're all set unless you'd like to make another change below.</p></div>";
			}

		}
		?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
