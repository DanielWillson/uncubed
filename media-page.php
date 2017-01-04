<?php
/* 

Template Name: Media Page

*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php
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
// we'll check if this is empty later to see if we should serve the page, or if we had problems
$errors = "";
/////////////////////////////////////////////////////////////////////////////////////////
// Get stuff from the API here.                                                        //
// Ask Tarek for his tarek@getwakefield.com google account for API access and things.  //
// that account also manages the youtube channel.                                      //
try {
  /** 
   * let's get the 12 most recent videos. here's the breakdown:
   *    1. top video banner
   *  2-5. top horizontal hero
   *  6-8. vertical next to popular vids
   * 9-12. first line loaded for ya at the bottom. load more with JS API below there.
   * documentation for api call: https://developers.google.com/youtube/v3/docs/search/list
   **/
  $recent = $youtube->search->listSearch('id,snippet', 
    array(
      'channelId' => $CHANNEL_ID,
      'maxResults' => 12,
      'type' => 'video',
      'order' => 'date'
      ));
  $npt = $recent['nextPageToken'];
  // get the 2 highest rated vids for the second lil bit
  $criticallyAcclaimed = $youtube->search->listSearch('id,snippet',
    array(
      'channelId' => $CHANNEL_ID,
      'maxResults' => 2,
      'type' => 'video',
      'order' => 'rating'
      ));
  // get 10 popular vids cuz it's a good number
  $criticsHateHim_tPertewMakes30GsAWeekFromHomeWithShittyYouTubeVideos = $youtube->search->listSearch('id,snippet',
    array(
      'channelId' => $CHANNEL_ID,
      'maxResults' => 10,
      'type' => 'video',
      'order' => 'viewCount'
      ));
  $home = get_home_url();
} catch (Google_ServiceException $e) {
  $errors .= '<div class="flash error"><h6>YouTube API Error:</h6><br>' . sprintf('<p>A service error occurred: <code style="white-space: pre-wrap; word-wrap: break-word;">%s</code></p>',
    htmlspecialchars($e->getMessage())) . '</div>';
} catch (Google_Exception $e) {
  $errors .= '<div class="flash error"><h6>YouTube API Error:</h6><br>' . sprintf('<p>An client error occurred: <code style="word-wrap: break-word; white-space: pre-wrap;">%s</code></p>',
    htmlspecialchars($e->getMessage())) . '</div>';
}
////////////////////////////////////////////////////////////////////////////////////////
?>

<?php if (!empty($errors)) { ?>
<div class="main-container">
<?php // we had a problem accessing youtube's api. problem markup below.
echo $errors;
?>
</div>
<?php
} else { // we're good. normal markup goes in here. ?>
<div class="video">
  <div id="videoPageWrapper" class="videoWrapper">
    <iframe type='text/html' src='http://www.youtube.com/embed/<?php echo $recent['items'][0]['id']['videoId']; ?>?modestbranding=1' width='640' height='360' frameborder='0' allowfullscreen='true' controls='0' ></iframe>
  </div>
</div>
<?php
/*
<div id="videos-above" onclick="location.href='<?php // echo $home . '/video?id=' . $recent['items'][0]['id']['videoId']; ?>'">
 <div class="blurry bg">
    <img id="ytbg" src="<?php //echo home_url(); ?>/timthumb.php?src=<?php //echo $recent['items'][0]['snippet']['thumbnails']['high']['url']; ?>&h=270&w=480&zc=1&a=c">
  </div>
  <div class="content-wrapper">
    <div class="content">
      <div id="play">&#9658;</div>
      <div class="clear-bit"></div>
      
      <a href="<?php //echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
        <h5><?php //echo $recent['items'][$i++]['snippet']['title']; ?></h5>
      </a>
    </div>
  </div>
</div>
*/
?>
<?php $i = 1; ?>
<div class="main-container">
  <ul class="row">
    <?php for (; $i < 5; $i++) { // recent articles 2 through 5 inclusive ?>
    <li class="mobile-doublewide">
      <a href="<?php echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
        <img src="<?php echo $home; ?>/timthumb.php?src=<?php echo $recent['items'][$i]['snippet']['thumbnails']['high']['url']; ?>&h=270&w=480&zc=1&a=c">
      </a>
      <a href="<?php echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
        <p><strong class="serif closer"><?php echo $recent['items'][$i]['snippet']['title']; ?></strong></p>
      </a>
      <p class="serif weak closer"><?php echo $recent['items'][$i]['snippet']['description']; ?></p>
    </li>
    <?php } ?>
  </ul>
  <ul class="row">
    <li class="doublewide">
      <?php // second highest rated ?>
      <a href="<?php echo $home . '/video?id=' . $criticallyAcclaimed['items'][1]['id']['videoId']; ?>" >
        <img src="<?php echo $home; ?>/timthumb.php?src=<?php echo $criticallyAcclaimed['items'][1]['snippet']['thumbnails']['high']['url']; ?>&h=270&w=480&zc=1&a=c">
      </a>
      <a href="<?php echo $home . '/video?id=' . $criticallyAcclaimed['items'][1]['id']['videoId']; ?>" >
        <p><strong class="serif closer"><?php echo $criticallyAcclaimed['items'][1]['snippet']['title']; ?></strong></p>
      </a>
      <p class="serif weak closer"><?php echo $criticallyAcclaimed['items'][1]['snippet']['description']; ?></p>
    </li>
    <li class="doublewide">
      <a href="<?php echo $home . '/video?id=' . $criticallyAcclaimed['items'][0]['id']['videoId']; ?>" >
        <img src="<?php echo $home; ?>/timthumb.php?src=<?php echo $criticallyAcclaimed['items'][0]['snippet']['thumbnails']['high']['url']; ?>&h=270&w=480&zc=1&a=c">
      </a>
      <a href="<?php echo $home . '/video?id=' . $criticallyAcclaimed['items'][0]['id']['videoId']; ?>" >
        <p><strong class="serif closer"><?php echo $criticallyAcclaimed['items'][0]['snippet']['title']; ?></strong></p>
      </a>
      <p class="serif weak closer"><?php echo $criticallyAcclaimed['items'][0]['snippet']['description']; ?></p>
    </li>
  </ul>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/events' ) ); ?>

<div id="final" class="main-container clearfix">
  <ul class="row">
    <?php for (; $i < 9; $i++) { // recent articles 2 through 5 inclusive ?>
    <li class="mobile-doublewide">
      <a href="<?php echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
        <img src="<?php echo home_url(); ?>/timthumb.php?src=<?php echo $recent['items'][$i]['snippet']['thumbnails']['high']['url']; ?>&h=270&w=270&zc=1&a=c">
      </a>
      <a href="<?php echo $home . '/video?id=' . $recent['items'][$i]['id']['videoId']; ?>" >
        <p><strong class="serif closer"><?php echo $recent['items'][$i]['snippet']['title']; ?></strong></p>
      </a>
      <p class="serif weak closer"><?php echo $recent['items'][$i]['snippet']['description']; ?></p>
    </li>
    <?php } ?>
  </ul>
  <div class="npt" style="display:none;"><?php echo $npt; ?></div>
</div>
<?php } ?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer', 'parts/shared/html-footer' ) ); ?>
<script>
  function nextPage() {
    $.get("<?php echo home_url(); ?>/wp-content/themes/uncubed/yt-page.php?pt=" + $('.npt').last().html(), function(data) {
      $(data).insertBefore("#morevids");
    });
  };

  $(function(){
    $("#final").append('<div id="morevids" class="see-more-link" style="text-align:center;"><h5><a href="javascript:nextPage();">more videos</a></h5></div>');
  });
</script>