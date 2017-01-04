<?php
if (isset($_GET['pt'])) {
	try {
	//load another page of yt results
		$pt = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['pt']);
		set_include_path(__DIR__ . "/src" . PATH_SEPARATOR . get_include_path());
		require_once 'Google/Client.php';
		require_once 'Google/Service/YouTube.php';

		/* notable constants */
		$API_KEY = 'AIzaSyC5i0PN4SZECsPCTuENVBy56H_Jjqiofh0';
		$CHANNEL_ID = 'UC-XfVHnrPoUwlfpRuShATAg';

		$client = new Google_Client();
		$client->setApplicationName("Client_Library_Examples");
		$client->setDeveloperKey($API_KEY);
		$youtube = new Google_Service_YouTube($client);

		$recent = $youtube->search->listSearch('id,snippet', 
			array(
				'channelId' => $CHANNEL_ID,
				'maxResults' => 12,
				'type' => 'video',
				'order' => 'date',
				'pageToken' => $pt
				));
		$dr = $_SERVER['DOCUMENT_ROOT']; 
		$cwd = getcwd(); 
		$path = str_replace($dr, '',  $cwd);

		$home = "http://uncubed.com";

	}	catch (Google_ServiceException $e) {
		echo '<div class="flash error"><h6>YouTube API Error:</h6><br>' . sprintf('<p>A service error occurred: <code style="white-space: pre-wrap; word-wrap: break-word;">%s</code></p>',
			htmlspecialchars($e->getMessage())) . '</div>';
	} catch (Google_Exception $e) {
		echo '<div class="flash error"><h6>YouTube API Error:</h6><br>' . sprintf('<p>A service error occurred: <code style="white-space: pre-wrap; word-wrap: break-word;">%s</code></p>',
			htmlspecialchars($e->getMessage())) . '</div>';
	}
	?>
	<ul class="row">
		<?php $i = 0; ?>
		<?php for($i = 0; $i < 4; $i++) { ?>
		<li>
			<a href="<?php echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
				<img src="<?php echo $path; ?>/timthumb.php?src=<?php echo $recent['items'][$i]['snippet']['thumbnails']['high']['url']; ?>&h=270&w=480&zc=1&a=c">
			</a>
			<a href="<?php echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
				<p><strong class="serif closer"><?php echo $recent['items'][$i]['snippet']['title']; ?></strong></p>
			</a>
			<p class="serif weak closer"><?php echo $recent['items'][$i]['snippet']['description']; ?></p>
		</li>
		<?php } ?>
	</ul>
	<ul class="row">
		<?php for($i = 4; $i < 8; $i++) { ?>
		<li>
			<a href="<?php echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
				<img src="<?php echo $path; ?>/timthumb.php?src=<?php echo $recent['items'][$i]['snippet']['thumbnails']['high']['url']; ?>&h=270&w=480&zc=1&a=c">
			</a>
			<a href="<?php echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
				<p><strong class="serif closer"><?php echo $recent['items'][$i]['snippet']['title']; ?></strong></p>
			</a>
			<p class="serif weak closer"><?php echo $recent['items'][$i]['snippet']['description']; ?></p>
		</li>
		<?php } ?>
	</ul>
	<ul class="row">
		<?php for($i = 8; $i < 12; $i++) { ?>
		<li>
			<a href="<?php echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
				<img src="<?php echo $path; ?>/timthumb.php?src=<?php echo $recent['items'][$i]['snippet']['thumbnails']['high']['url']; ?>&h=270&w=480&zc=1&a=c">
			</a>
			<a href="<?php echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
				<p><strong class="serif closer"><?php echo $recent['items'][$i]['snippet']['title']; ?></strong></p>
			</a>
			<p class="serif weak closer"><?php echo $recent['items'][$i]['snippet']['description']; ?></p>
		</li>
		<?php } ?>
	</ul>
	<div class="npt" style="display:none;"><?php echo $recent['nextPageToken']; ?></div>
	<?php
}
?>