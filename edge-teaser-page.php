<?php

/* 

Template Name: Edge Teaser Page

*/

?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php 
	$button_link = get_field('button_link');
	$button_text = get_field('button_text');
?>

<div id="full-width-page" class="edge-teaser">
	<div class="main-container">
		<div class="edge-heading-container">
			<img class="edge-logo" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/edge-logo.png" />
			<br />
			<h2><strong>Learn Cutting Edge Skills From Cutting Edge Companies</strong></h2>
			<a href="<?php echo $button_link; ?>" class="subscribe-button large"><?php echo $button_text; ?></a>
			<h6>*For a very limited time. Cancel whenever.</h6>
			<h6><a href="https://ssl.usefedora.com/login_register.php?affcode=&site=3154#login">Already a Member? Login</a></h6>
			<br />
			<br />
			<br />
			<img class="edge-companies" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/edge-company-logos.png" />
		</div>
	</div>
</div>
<div class="main-container">
	<div class="content">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
	<br />
	<!--<iframe src="//fast.wistia.net/embed/iframe/3v04x23f84?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe>
<script src='//fast.wistia.com/static/iframe-api-v1.js'></script>-->
	<!--
	<hr />
	<div class="classes-container">
		<ul>
			<li class="edge-class">
				<img class="thumbnail" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/edge-background-image.jpg" />
				<div class="edge-class-info">
					<div class="class-company-logo-container">
						<img class="class-company-logo" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/evernote-logo.png" />
					</div>
					<div class="edge-class-details">
						<h6 class="class-title">Building for Mobile</h6>
						<h6 class="class-category">Product Development</h6>
						<h6 class="class-company-name">Evernote</h6>
					</div>
				</div>
			</li>
			<li class="edge-class">
				<img class="thumbnail" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/edge-background-image.jpg" />
				<div class="edge-class-info">
					<div class="class-company-logo-container">
						<img class="class-company-logo" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/evernote-logo.png" />
					</div>
					<div class="edge-class-details">
						<h6 class="class-title">Building for Mobile</h6>
						<h6 class="class-category">Product Development</h6>
						<h6 class="class-company-name">Evernote</h6>
					</div>
				</div>
			</li>
			<li class="edge-class">
				<img class="thumbnail" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/edge-background-image.jpg" />
				<div class="edge-class-info">
					<div class="class-company-logo-container">
						<img class="class-company-logo" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/evernote-logo.png" />
					</div>
					<div class="edge-class-details">
						<h6 class="class-title">Building for Mobile</h6>
						<h6 class="class-category">Product Development</h6>
						<h6 class="class-company-name">Evernote</h6>
					</div>
				</div>
			</li>
			<li class="edge-class">
				<img class="thumbnail" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/edge-background-image.jpg" />
				<div class="edge-class-info">
					<div class="class-company-logo-container">
						<img class="class-company-logo" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/evernote-logo.png" />
					</div>
					<div class="edge-class-details">
						<h6 class="class-title">Building for Mobile</h6>
						<h6 class="class-category">Product Development</h6>
						<h6 class="class-company-name">Evernote</h6>
					</div>
				</div>
			</li>
			<li class="edge-class">
				<img class="thumbnail" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/edge-background-image.jpg" />
				<div class="edge-class-info">
					<div class="class-company-logo-container">
						<img class="class-company-logo" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/evernote-logo.png" />
					</div>
					<div class="edge-class-details">
						<h6 class="class-title">Building for Mobile</h6>
						<h6 class="class-category">Product Development</h6>
						<h6 class="class-company-name">Evernote</h6>
					</div>
				</div>
			</li>
			<li class="edge-class">
				<img class="thumbnail" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/edge-background-image.jpg" />
				<div class="edge-class-info">
					<div class="class-company-logo-container">
						<img class="class-company-logo" src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/evernote-logo.png" />
					</div>
					<div class="edge-class-details">
						<h6 class="class-title">Building for Mobile</h6>
						<h6 class="class-category">Product Development</h6>
						<h6 class="class-company-name">Evernote</h6>
					</div>
				</div>
			</li>
		</ul>
	</div>
-->
</div>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>