<?php
/**
 * The Template is for displaying branded university pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<script src="<?php echo home_url() ?>/wp-content/themes/uncubed/js/plexer.js"></script>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php 
	$university = get_field('university_name');
	$abbreviated_name = get_field('abbreviated_university_name');
	$link = get_field('link');
	$logo = get_field('logo');
	$primary_color = get_field('primary_color');
	$secondary_color = get_field('secondary_color');
	$image = get_field('image');
	$display_logo = get_field('display_logo');
	$university_resources = get_field('university_resources');
	?>
<!-- Setting link color -->
<?php echo '<style type="text/css"> .university-page a, .university-page a:hover, .university-page a:visited, .university-page a:focus { color: '; echo $primary_color;?>; }
<?php echo '#resources-list a, #resources-list a:hover, #resources-list a:visited, #resources-list a:focus { color: '; echo '#FFF; }';?>
<?php echo '#resources-list .list-row:hover td.circle-content div { background: '; echo $primary_color; ?>; }
<?php echo '::selection { color: #FFF; background: '; echo $primary_color; ?>; }
<?php echo '.plexer #switchboard .active { background-color: '; echo $primary_color; ?>;
											border: 1px solid <?php echo $primary_color; ?> }
<?php echo '.plexer #switchboard .active a { color: #FFF; }'; ?>
<?php echo '.event-title a, .event-title a:visited, .event-title a:focus { color: #000; }'; ?>
</style>
<!-- End of setting link color -->
<div class="university-page">	
	<div id="above" style="
		background: <?php echo $primary_color ?> url('<?php echo $image ?>') no-repeat center bottom fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		">
		<div id="darker">
		</div>
		<div id="university-heading" class="clearfix">
			<div id="resources-heading">
				<h2><?php echo $university; ?></h2>
				<h3>Startup Career Resources</h3>
			</div>
			<div id="resources-description">
				<h6 style="font-size: 1.375em;">Short description text about these resources goes here in a simple, catchy way.</h6>
				<p class="university-abbr"><?php echo $university; ?></p>
				<br />
			</div>
			<div class="table-list" id="resources-list">
				<table>
					<tr>
						<td class="table-header" colspan="2">
							<h5>Click to jump to a resource:</h5>
						</td>
					</tr>
					<tr class="list-row">
						<td class="circle-content">
							<div style="border: 2px solid <?php echo $primary_color ?>;">
								<a href="#resources">
									<h6 class="arrow">&rarr;</h6>
								</a>
							</div>
						</td>
						<td class="list-details">
							<a href="#resources">
								<h6><span class="heading">Startup Jobs</span></h6>
								<h6><span class="subheading">Tips when applying for startup jobs</span></h6>
							</a>
						</td>
					</tr>
					<tr class="list-row">
						<td class="circle-content">
							<div style="border: 2px solid <?php echo $primary_color ?>;">
								<a href="#universities-edge">
									<h6 class="arrow">&rarr;</h6>
								</a>
							</div>
						</td>
						<td class="list-details">
							<a href="#universities-edge">
								<h6><span class="heading">Uncubed Edge</span></h6>
								<h6><span class="subheading">Learn cutting-edge skills</span></h6>
							</a>
						</td>
					</tr>
					<tr class="list-row">
						<td class="circle-content">
							<div style="border: 2px solid <?php echo $primary_color ?>;">
								<a href="#universities-events">
									<h6 class="arrow">&rarr;</h6>
								</a>
							</div>
						</td>
						<td class="list-details">
							<a href="#universities-events">
								<h6><span class="heading">Upcoming Events</span></h6>
								<h6><span class="subheading">Meet hiring startups at Uncubed</span></h6>
							</a>
						</td>
					</tr>
					<tr class="list-row">
						<td class="circle-content">
							<div style="border: 2px solid <?php echo $primary_color ?>;">
								<a href="#jobs-description">
									<h6 class="arrow">&rarr;</h6>
								</a>
							</div>
						</td>
						<td class="list-details">
							<a href="#u-resources-description">
								<h6><span class="heading">University Resources</span></h6>
								<h6><span class="subheading">Discover resources at your college</span></h6>
							</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="university-page" id="resources">
	<div class="main-container">
		<div id="bar">
			<div id="block-heading-container">
				<h3>Startup Jobs</h3>
			</div>
		</div>
		<div class="plexer">
			<div class="instructions">
				<h6>Select a button below to view a resource.</h6>
				<br />
			</div>
			<ul id="switchboard">
				<!-- WHILE LOOP 1 BEGINS -->
				<?php 
				$args = array( 
					'post_type' => 'career-resource',
					'posts_per_page' => -1
				);
				$loop = new WP_Query( $args );
				$counter = 0;
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php 
						$title = get_the_title();
						$counter++;
						$id = 'tab-' . $counter;
					?>
		        <li data-content-name="<?php echo $counter?>">
		            <a href="#<?php echo $id; ?>"><?php echo $title; ?></a>
		        </li>
			    <?php endwhile;?>
		    </ul>

		    <div id="content">
			    <!-- WHILE LOOP 2 BEGINS -->
				<?php 
				$args = array( 
					'post_type' => 'career-resource',
					'posts_per_page' => -1
				);
				$loop = new WP_Query( $args );
				$counter = 0;
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php 
						$title = get_the_title();
						$content = get_the_content();
						$counter++;
						$id = 'tab-' . $counter;
					?>
				<div data-name="<?php echo $counter ?>">
					<h5><?php the_title() ?></h5>
					<br />
					<article>
						<?php the_content(); ?>
					</article>
				</div>
				<?php endwhile;?>
			</div>
		</div>
		
	</div>
</div>
<?php endwhile; ?>

<div class="university-page">
	<div id="universities-edge" >
		<div class="main-container">
			<div id="bar">
				<div id="block-heading-container">
					<h3>Uncubed Edge</h3>
				</div>
			</div>
			<br />
			<p>Learn the most innovative techniques in tech, design, and business from the companies you love.</p>
			<br />

			<div class="to-be-slid" style="text-align: center;">
				<ul>
					<li>
						<div onclick="location.href=#" class="u-edge-vid">
							<span class="helper"></span>
							<iframe src="//fast.wistia.net/embed/iframe/b0tbv180vh?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="600" height="338"></iframe><script src="//fast.wistia.net/assets/external/E-v1.js"></script>
						</div>
					</li>
				
					<li class="hidden">
						<div onclick="location.href=#" class="u-edge-vid">
							<span class="helper"></span>
							<!-- <iframe width="853" height="480" src="https://www.youtube.com/embed/0SOgxg5tn24?rel=0" frameborder="0" allowfullscreen></iframe> -->
						</div>
					</li>
				</ul>
			</div>
			
			<br />
			<h5 style="text-align: right;"><a href="https://sso.usefedora.com/secure/879/users/sign_up?reset_purchase_session=1">Sign up for Uncubed Edge!</a></h5>
			<br />
		</div>
	</div>
</div>

<div class="university-page">
	<div id="universities-events" >
		<div class="main-container">
			<div id="bar">
				<div id="block-heading-container">
					<h3>Uncubed Conferences</h3>
				</div>
			</div>
			<br />
			<p>We produce the Uncubed conference series – high-energy and creative gatherings of thought leaders, high-calibre talent, and industry-changing companies (all of which are hiring). These conferences connect job- and internship-seekers with a highly curated lineup of some of the most exciting and successful companies around the world.
			</p>
		</div>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/events' ) ); ?>
	</div>
</div>
<div class="university-page">
	<div id="u-resources-description">
		<div class="main-container">
			<div id="bar">
				<div id="block-heading-container">
					<h3>University Resources</h3>
				</div>
			</div>
			<br />
			<div><?php echo $university_resources; ?></div>
		</div>
	</div>
</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>