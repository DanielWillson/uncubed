<script>console.log('attempting to connect to youtube');</script>
<?php
set_include_path(__DIR__ . "/../../src/" . PATH_SEPARATOR . get_include_path());
require_once 'Google/Client.php';
require_once 'Google/Service/YouTube.php';
$home = get_home_url();
// init GAPI
$client = new Google_Client();
$client->setApplicationName("Client_Library_Examples");
$client->setDeveloperKey("AIzaSyC5i0PN4SZECsPCTuENVBy56H_Jjqiofh0");
// https://www.youtube.com/watch?v=gzkVDb54oeU
$youtube = new Google_Service_YouTube($client);
/* the old college*/try {
	$query = array(
		'channelId' => 'UC-XfVHnrPoUwlfpRuShATAg',
		'maxResults' => 15,
		'type' => 'video',
		'order' => 'viewCount' // could order by 'rating', 'viewCount', 'date'
		);
    // https://developers.google.com/youtube/v3/docs/search/list
	$searchResponse = $youtube->search->listSearch('id,snippet', $query);

	?>
	<div id="media">
		<div class="main-container clearfix">
			<div id="bar">
				<div id="block-heading-container">
					<h3>Videos</h3>
				</div>
			</div>
			<?php $first = array_shift($searchResponse['items']); ?>
			<div id="media-hero">
				<div id="media-first">
					<div id="mfc">
						<a href="<?php echo $home . '/video?id=' . $first['id']['videoId']; ?>">
							<img src="<?php echo $home . '/timthumb.php?src=' . $first['snippet']['thumbnails']['high']['url'] . "&h=270&w=480"; ?>">
						</a>
						<br>
						<br>
						<a href="<?php echo $home . '/video?id=' . $first['id']['videoId']; ?>" >
							<h5><?php echo $first['snippet']['title']; ?></h5>
						</a>
						<p class="serif weak"><?php echo $first['snippet']['description']; ?></p>
						<br />
						<div class="see-more-link">
							<h6><a style="color:#f05a28;" href="<?php echo $home . '/video?id=' . $first['id']['videoId']; ?>">watch video</a></h6>
						</div>
					</div>
				</div>
				<div id="media-rest" class="to-be-slid" data-slider-arrow-style="vert" >
					<ul>
						<?php foreach ($searchResponse['items'] as $vid) { ?>
						<li class="vid">
							<div onclick="location.href='<?php echo $home . '/video?id=' . $vid['id']['videoId']; ?>'">
								<span class="helper"></span>
								<a href="<?php echo $home . '/video?id=' . $vid['id']['videoId']; ?>">
									<img src="<?php echo $home . '/timthumb.php?src=' . $vid['snippet']['thumbnails']['high']['url'] . "&h=270&w=480"; ?>">
								</a>
							</div>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<?php
		} catch (Google_ServiceException $e) {
			$htmlBody .= '<div class="flash error"><h6>YouTube API Error:</h6><br>' . sprintf('<p>A service error occurred: <code style="white-space: pre-wrap; word-wrap: break-word;">%s</code></p>',
				htmlspecialchars($e->getMessage())) . '<br><a href="' . $link . '">Back to Media</a></div>';
		} catch (Google_Exception $e) {
			$htmlBody .= '<div class="flash error"><h6>YouTube API Error:</h6><br>' . sprintf('<p>An client error occurred: <code style="word-wrap: break-word; white-space: pre-wrap;">%s</code></p>',
				htmlspecialchars($e->getMessage())) . '<br><a href="' . $link . '">Back to Media</a></div>';
		}
		?>
		<div class="see-more-link">
			<h5><a href="<?php echo home_url(); ?>/videos">See All Videos →</a></h5>
		</div>
	</div>
</div>