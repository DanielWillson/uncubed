<?php
/*
Single Post Template: [Neighborhood Guide]
Description: This template should only be used for Neighborhhod Guide Wakefield Posts.
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <!-- <div id="content"> -->
  <div id="above" <?php if (has_post_thumbnail()) { echo "style='background: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ") center top fixed; background-size: cover;'"; }?>>
    
    <div id="article-heading">
      <h2 style="font-size: 3em!important;">
        <?php $sh = get_field('subheading'); ?>
        <?php if (!empty($sh)) { echo '<h2 class="movedHeader">' . $sh . '</h2>'; } ?>
      </h2>
      
      <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate="pubdate"><?php the_date(); ?></time>
      
      <h2 style="font-size: 1.714em;"><?php the_title(); ?></h2>
    </div>

 
  </div>
  <div class="content-holder clearfix">
    <div class="article-holder">
      
      <?php $caption = get_posts( array( 'p' => get_post_thumbnail_id(), 'post_type' => 'attachment' ) )[0]->post_excerpt;?>
      <?php if (!empty($caption)) { ?>
      <div id="callout">
        <img src="<?php echo home_url(); ?>/wp-content/themes/uncubed/images/callout.png">
        <p><em><?php echo $caption; ?></em></p>
      </div>
      <?php } ?>
      <div style="clear:both;"></div>
   
      <div id="sidebar" style="display: none;">
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
      </div>
      <article style="width: 100%;">

        <nav class="guidenav">
          <br/>
          <div id="social"><?php Starkers_Utilities::get_template_parts( array( 'parts/share-this-page' ) ); ?></div>
          <ul>
            <li><a href="#location" class="a">Location</a></li>
            <li><a href="#history" class="a"><?php the_field('section_1_title'); ?></a></li>
            <li><a href="#places" class="a"><?php the_field('section_2_title'); ?></a></li>
            <li><a href="#coworking" class="a"><?php the_field('section_3_title'); ?></a></li>
            <li><a href="#startups" class="a"><?php the_field('section_4_title'); ?></a></li>
          </ul>
        </nav>


        <div id="content" class="guide-content">
          <?php the_content(); ?>
          <br>
        </div>

        
        <section id="location">
          <p class="guide-section-title">
            <img src="http://uncubed.com/wp-content/uploads/2016/02/Location.jpg" alt="icon" class="guide-icon"/>
            <?php the_field('map_caption'); ?>
          </p>
          <div class="field-map-container"><?php the_field('map'); ?></div>
        </section>


        <section id="history" class="guide-section">
          <p class="guide-section-title">
            <img src="http://uncubed.com/wp-content/uploads/2016/02/History.jpg" alt="icon" class="guide-icon" />
            <?php the_field('section_1_title'); ?>
          </p>
          <br>
          <img src="<?php the_field('section_1_image'); ?>" alt="" />
          <?php the_field('section_1_caption'); ?>
        </section>
        

        <section id="places" class="guide-section">
          <p class="guide-section-title">
            <img src="http://uncubed.com/wp-content/uploads/2016/02/Where-to-Meet.jpg" alt="icon" class="guide-icon"/>
            <?php the_field('section_2_title'); ?>
          </p>

          <?php the_field('section_2_caption'); ?>
          <br>
          <img src="<?php the_field('section_2_image'); ?>" alt="" />
          
          <!-- custom places for DUMBO -->
          <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/dumbo-places') ); ?>       
          <!-- end -->
        </section>


        <section id="coworking" class="guide-section">
          <p class="guide-section-title">
            <img src="http://uncubed.com/wp-content/uploads/2016/02/What-to-Know.jpg" alt="icon" class="guide-icon" />
            <?php the_field('section_3_title'); ?>
          </p>

          <?php the_field('section_3_caption'); ?>

          <section class = "cowork-section">
            <div style="width: 100%; margin: 0 auto; box-sizing:border-box; padding-top: 30px;">
              <div class="cowork-container">
                <img src="<?php the_field('section_3_image'); ?>" style="width: 100% !important;">
                <p><?php the_field('sec_3_text'); ?></p>
              </div>

              <div class="cowork-container">
                <img src="<?php the_field('section_3_image_1'); ?>" style="width: 100% !important;">
                <p><?php the_field('section_3_text_1'); ?></p>
              </div>

              <div class="cowork-container">
                <img src="<?php the_field('section_3_image_2'); ?>" style="width: 100% !important;">
                <p><?php the_field('section_3_text_2'); ?></p>
              </div>
           
              <div class="cowork-container">
                <img src="<?php the_field('section_3_image_3'); ?>" style="width: 100% !important;">
                <p><?php the_field('section_3_text_3'); ?></p>
              </div>

              <div class="cowork-container">
                <img src="<?php the_field('section_3_image_4'); ?>" style="width: 100% !important;">
                <p><?php the_field('section_3_text_4'); ?></p>
              </div>

              <div class="cowork-container">
                <img src="<?php the_field('section_3_image_5'); ?>" style="width: 100% !important;">
                <p><?php the_field('section_3_text_5'); ?></p>
              </div>

            </div>
          </section>

        </section>


        <section id="startups" class="guide-section">
          <p class="guide-section-title">
            <img src="http://uncubed.com/wp-content/uploads/2016/02/Where-to-Work.jpg" alt="icon" class="guide-icon" />
            <?php the_field('section_4_title'); ?>
          </p>
          
          <?php the_field('section_4_caption'); ?>
          <br>
          <img src="<?php the_field('section_4_image'); ?>" alt="" />

          <!-- custom companies logo for DUMBO -->
          <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/dumbo-companies' ) ); ?>       
          <!-- end -->

        </section>

        <br>
        <br>

        <div id="social"><?php Starkers_Utilities::get_template_parts( array( 'parts/share-this-post' ) ); ?></div>


        <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/nitty-gritty.php')); ?>
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

  $below_format = "<div id='below' style='background: url(". wp_get_attachment_url(get_post_thumbnail_id($prev_id)) .") top no-repeat; background-size: cover;' onclick='location.href=\"" . get_permalink($prev_id) . "\"'><div id='below-box'><h4>READ THIS NEXT:</h4><h3 style='font-size: 3.05em;' class='mobile_h3'>%link</h3></div></div>";
  previous_post_link($below_format);
  ?>

<?php endwhile; ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/events', 'parts/shared/jobs', 'parts/shared/footer','parts/shared/html-footer' ) ); ?>