<?php

/* 

Template Name: Manage Unsubscribe

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
      echo "<div class='flash error'><p>Really? That's not an email address.</p><br><img width='250px' height='141px' src='" . home_url() . "/wp-content/themes/uncubed/images/really.gif'></img></div>";
    } else {

      if ($_GET['confirm'] === '1') {
        echo "<div class='flash success'><h5>We've updated your subscriptions:</h5><ul>";

        if ($_GET['national'] === '1') {
          echo '<li><p class="bullet">&#10004;</p><p> National Edition</p></li>';
        } 
       
        if ($_GET['ny'] === '1') {
          echo '<li><p class="bullet">&#10004;</p><p> NY Edition</p></li>';
        } 
       
        // for unsubscribe page
        if ($_GET['weekly'] === '1') {
          echo '<li><p class="bullet">&#10004;</p><p> Weekly Digest</p></li>';
          echo '<li><p class="bullet">&#x2717;</p><p> National Edition</p></li>';
          echo '<li><p class="bullet">&#x2717;</p><p> NY Edition</p></li>';
        }

        if ($_GET['national'] === '0') {
          echo '<li><p class="bullet">&#x2717;</p><p> National Edition</p></li>';
        }

        if ($_GET['ny'] === '0') {
          echo '<li><p class="bullet">&#x2717;</p><p> NY Edition</p></li>';
        }

        
        echo "<div style='margin-top: 30px;'>
                <strong>Follow us:</strong><br /><br />

                <a href='https://twitter.com/Wakefield' class='twitter-follow-button unsubscribe-twitter' data-show-count='false' style='vertical-align: top;'>Follow @Wakefield</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
           

                <iframe src='//www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2FWakefield&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;width=50&amp;appId=195006943902129' scrolling='no' frameborder='0' style='border:none; overflow:hidden; height:35px; width: 50px;' allowTransparency='true'></iframe>
                
                <a href='http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Funcubed.com%2Ffeed'  target='blank'>
                  <img id='feedlyFollow' src='http://s3.feedly.com/img/follows/feedly-follow-rectangle-volume-small_2x.png' alt='follow us in feedly' width='66' height='20' style='vertical-align: top;'>
                </a>
              </div>";
        echo "</ul><p style='margin-top:10px;'>You're all set unless you'd like to make another change below.</p></div>";

      }

    }
    ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
