<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!-- <div id="content"> -->
	<div id="above" <?php if (has_post_thumbnail()) { echo "style='background: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ") center top fixed; background-size: cover;'"; }?>>
		<div id="article-heading">
			<h2 style="font-size: 3em!important;">
				<?php //$sh = get_field('subheading'); ?>
				<?php //if (!empty($sh)) { echo '<h2 class="movedHeader">' . $sh . '</h2>'; } ?>
				The Final Round
			</h2>
			
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate="pubdate"><?php the_date(); ?></time>
			
			<h2 style="font-size: 1.714em;"><?php the_title(); ?></h2>
			
		</div>
		<div id="next-post-header">
			<?php
			$prev_id = get_adjacent_post(false,"", true)->ID;
			$next_link_format = '<div id="link">
			<h6 style="color: #ddd">READ THIS NEXT:</h6>
			<h6>%link</h6></div>
			<div id="arrow" onclick="location.href=\'' . get_permalink($prev_id) . '\'"">
				<h5>></h5>
			</div>';
			previous_post_link($next_link_format);
			?>
		</div>
	</div>
	<div class="content-holder clearfix">
		<div class="article-holder">
			<br>
			<?php $caption = get_posts( array( 'p' => get_post_thumbnail_id(), 'post_type' => 'attachment' ) )[0]->post_excerpt;?>
			<?php if (!empty($caption)) { ?>
			<div id="callout">
				<img src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/callout.png">
				<p><em><?php echo $caption; ?></em></p>
			</div>
			<?php } ?>
			<!--Social stuff-->
			<!--<div id="social"><?php //Starkers_Utilities::get_template_parts( array( 'parts/share-this-post' ) ); ?></div>-->
			<div style="clear:both;"></div>
			<br>
			<!-- <div id="sidebar">
				<div class="subscribe">
					<strong>Don't get up. We deliver.</strong>
					<p>Sign up to receive our content every day in the comfort of your inbox.</p>
					<form method="post" class="clearfix" action="<?php echo home_url(); ?>/subscribe.php">
						<input type="text" class="email" name="email">
						<input type="hidden" name="vars[source]" value="article-subscribe-box" />
						<strong><input type="submit" class="submit" value=">"></strong>
						<input type="hidden" name="redirect" value="<?php echo home_url(); ?>/subscribe.php">
					</form>
				</div>
				<div class="subscribe">
					<strong>Don't miss stories. Follow us:</strong>
					<br /><br />
					<a href="https://twitter.com/Wakefield" class="twitter-follow-button" data-show-count="false">Follow @Wakefield</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					<br>
					<br>
					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2FWakefield&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;width=50&amp;appId=195006943902129" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px; width: 50px;" allowTransparency="true"></iframe>
					<br>
					<a href='http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Funcubed.com%2Ffeed'  target='blank'><img id='feedlyFollow' src='http://s3.feedly.com/img/follows/feedly-follow-rectangle-volume-small_2x.png' alt='follow us in feedly' width='66' height='20'></a>
				</div>
			</div> -->
			<article>
				<div id="content">
					<p class="tfr_intro" style="font-size: 0.8em; font-style: italic; border-top: 1px solid #000; border-bottom: 1px solid #000;">The Final Round is a weekly publication for hiring managers and people people. It's a look at our favorite happenings on the entire web (as it relates to hiring great people anyway).</p>
					<?php the_content(); ?>
				</div>
				<br>
				<!--div id="social">--><?php Starkers_Utilities::get_template_parts( array( 'parts/share-this-post' ) ); ?><!--</div>-->
				<?php $ng1 = get_field('nitty_gritty_1'); ?>
				<?php $ng2 = get_field('nitty_gritty_2'); ?>
				<?php $ng3 = get_field('nitty_gritty_3'); ?>
				<?php $ng4 = get_field('nitty_gritty_4'); ?>
				<?php if (!empty($ng1)) { ?>
				<div class="nittygritty">
					<p><strong>Nitty Gritty</strong></p>
					<?php if ( !empty($ng1) ) { echo "<p>" . $ng1 . "</p>"; } ?>
					<?php if ( !empty($ng2) ) { echo "<p>" . $ng2 . "</p>"; } ?>
					<?php if ( !empty($ng3) ) { echo "<p>" . $ng3 . "</p>"; } ?>
					<?php if ( !empty($ng4) ) { echo "<p>" . $ng4 . "</p>"; } ?>
				</div>
				<?php } ?>
				<div class="subscribe">
					<strong>Don't get up. We deliver.</strong>
					<p>Sign up to receive our content every day in the comfort of your inbox.</p>
					<form method="post" class="clearfix" action="<?php echo home_url(); ?>/subscribe.php">
						<input type="text" class="email" name="email">
						<strong><input type="submit" class="submit" value=">"></strong>
						<input type="hidden" name="redirect" value="<?php echo home_url(); ?>/subscribe.php">
					</form>
				</div>
				<div class="subscribe">
					<strong>Don't miss stories. Follow us:</strong>
					<br /><br />
					<a href="https://twitter.com/Wakefield" class="twitter-follow-button" data-show-count="false">Follow @Wakefield</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					<br>
					<br>
					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2FWakefield&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;width=50&amp;appId=195006943902129" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px; width: 50px;" allowTransparency="true"></iframe>
					<br>
					<a href='http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Funcubed.com%2Ffeed'  target='blank'><img id='feedlyFollow' src='http://s3.feedly.com/img/follows/feedly-follow-rectangle-volume-small_2x.png' alt='follow us in feedly' width='66' height='20'></a>
				</div>

				<?php if ( get_the_author_meta( 'description' ) ) : ?>
					<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
					<h3>About <?php echo get_the_author() ; ?></h3>
					<?php the_author_meta( 'description' ); ?>
				<?php endif; ?>

				<?php // comments_template( '', true ); ?>
			</article>
		</div>
	</div>

	<?php

	$below_format = "<div id='below' style='background: url(". wp_get_attachment_url(get_post_thumbnail_id($prev_id)) .") top no-repeat; background-size: cover;' onclick='location.href=\"" . get_permalink($prev_id) . "\"'><div id='below-box'><h4>READ THIS NEXT:</h4><h3 style='font-size: 3.05em;'>%link</h3></div></div>";
	previous_post_link($below_format);
	?>

<?php endwhile; ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/events', 'parts/shared/jobs', 'parts/shared/footer','parts/shared/html-footer' ) ); ?>