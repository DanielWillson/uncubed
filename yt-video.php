<?php /* Template Name: YT Video */ 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if (isset($_GET['id']) && preg_match('/[a-zA-Z0-9_-]{11}/', $_GET['id'])) { ?>
<div class="video">
	<div class="videoWrapper">
		<?php
		// looks for GET param 'id'
		set_include_path(__DIR__ . '/src' . PATH_SEPARATOR . get_include_path());
		require_once 'Google/Client.php';
		require_once 'Google/Service/YouTube.php';
		// init GAPI
		$client = new Google_Client();
		$client->setDeveloperKey("AIzaSyC5i0PN4SZECsPCTuENVBy56H_Jjqiofh0");
		// new client
		$youtube = new Google_Service_YouTube($client);
		try {
			$vidInfo = $youtube->videos->listVideos('snippet', 
				array(
					'id' => $_GET['id']
					));

			$channelInfo = $youtube->channels->listChannels('snippet',
				array(
					'id' => 'UC-XfVHnrPoUwlfpRuShATAg',
					));

			// channel info vars
			$channelThumbUrl = $channelInfo['items'][0]['snippet']['thumbnails']['default']['url'];
			$channelName = $channelInfo['items'][0]['snippet']['title'];
			// video info vars
			$title = $vidInfo['items'][0]['snippet']['title'];
			$description = $vidInfo['items'][0]['snippet']['description'];

			$related = $youtube->search->listSearch('snippet', 
				array(
					'channelId' => 'UC-XfVHnrPoUwlfpRuShATAg',
					'type' => 'video',
					'maxResults' => 4,
					'q' => $title
					));

			function nl2p($string, $line_breaks = true, $xml = false) {
				$string = str_replace(array('<p>', '</p>', '<br>', '<br />'), '', $string);
				// It is conceivable that people might still want single line-breaks
				// without breaking into a new paragraph.
				if ($line_breaks == true)
					return '<p class="serif">'.preg_replace(array("/([\n]{2,})/i", "/([^>])\n([^<])/i"), array("</p>\n<p class='serif'>", '$1<br'.($xml == true ? ' /' : '').'>$2'), trim($string)).'</p>';
				else 
					return '<p class="serif">'.preg_replace(
						array("/([\n]{2,})/i", "/([\r\n]{3,})/i","/([^>])\n([^<])/i"),
						array("</p>\n<p class='serif'>", "</p>\n<p class='serif'>", '$1<br'.($xml == true ? ' /' : '').'>$2'),
						trim($string)).'</p>'; 
			}
			echo "<iframe type='text/html' src='http://www.youtube.com/embed/". $_GET['id'] ."?modestbranding=1' width='640' height='360' frameborder='0' allowfullscreen='true'></iframe>";
		} catch (Google_ServiceException $e) {
			echo '<div class="flash error"><h6>YouTube API Error:</h6><br>' . sprintf('<p>A service error occurred: <code style="white-space: pre-wrap; word-wrap: break-word;">%s</code></p>', htmlspecialchars($e->getMessage()));
		} catch (Google_Exception $e) {
			echo '<div class="flash error"><h6>YouTube API Error:</h6><br>' . sprintf('<p>An client error occurred: <code style="word-wrap: break-word; white-space: pre-wrap;">%s</code></p>', htmlspecialchars($e->getMessage()));
		}
		?>
	</div>
</div>
<br>
<div class="main-container">
	<div id="share-wrapper">
		<?php Starkers_Utilities::get_template_parts( array( 'parts/share-this-page' ) ); ?>
	</div>
	<div id="info clearfix">
		<div id="channel" class="clearfix">
			<div id="channel-thumb">
				<img src="<?php echo $channelThumbUrl; ?>">
			</div>
			<p><strong class="serif"><?php echo $title; ?></strong></p>
			<a href="https://www.youtube.com/user/GetWakefield"><p class="serif"><?php echo $channelName ?></p></a>
		</div>
		<div id="description">
			<p><strong class="serif">About This Video:</strong></p>
			<p class="serif"><?php echo nl2p($description); ?></p>
		</div>
		<div id="related">
			<h6><strong>More Videos:</strong></h6>
			<ul>
				<?php $i = 0; ?>
				<?php foreach ($related['items'] as $rel) { ?>
				<?php if ($i > 0) { ?>
				<li class="clearfix">
					<a href="<?php echo home_url() . "/video?id=" . $rel['id']['videoId']; ?>"><img src="<?php echo $rel['snippet']['thumbnails']['medium']['url']; ?>"></a>
					<a href="<?php echo home_url() . "/video?id=" . $rel['id']['videoId']; ?>"><p class="serif"><?php echo $rel['snippet']['title']; ?></p></a>
				</li>
				<?php } $i += 1; ?>
				<?php } ?>
			</ul>
		</div>
		<div class="clear-bit"></div>
	</div>
</div>
<?php } else { ?>

<div class="main-container">
	<div class="flash error">
		<h3><strong>Whoops!</strong></h3>
		<h5>We couldn't find that video.</h5>
	</div>
</div>

<?php } ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/events', 'parts/shared/home-editorial', 'parts/shared/footer','parts/shared/html-footer' ) ); ?>