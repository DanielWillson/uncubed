<?php

/* 

Template Name: Grad Guide

*/

?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div id="full-width-page">
  <div class="clearfix" style="width: 100%;">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <!--<div id="bar">
      <div id="block-heading-container">
        <h3><?php the_title(); ?></h3>
      </div>
    </div>-->
    <br />
    
      <?php the_content(); ?>
      
      <div class="grad-container">
        <div class="grad-logos">
          <div class="col-md-3"><img src="http://www.placehold.it/200x50" alt="" class="grad-img"></div>
          <div class="col-md-3"><img src="http://www.placehold.it/200x50" alt="" class="grad-img"></div>
          <div class="col-md-3"><img src="http://www.placehold.it/200x50" alt="" class="grad-img"></div>
          <div class="col-md-3"><img src="http://www.placehold.it/200x50" alt="" class="grad-img"></div>
        </div>
        
        <div>
          <h2 class="grad-title">The Grad's Guide to Getting a Startup Job</h2>
          <div class="grad-bar"></div>
          <p class="grad-intro-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed faucibus diam, ut lacinia nisi. Ut faucibus finibus mi non placerat. Proin sollicitudin volutpat dolor id ultrices. Donec vehicula iaculis ex, eget malesuada dui bibendum sit amet. Vivamus malesuada consequat lobortis. Quisque justo est, facilisis ac diam vitae, eleifend rutrum dui. Ut blandit sollicitudin odio, vel mollis lectus. Pellentesque purus mauris, vulputate eget euismod vel, rutrum id lorem tesque felis.</p>
        </div>

        <div class="grad-prep">
          <h4 class="grad-h4">The Preparation</h4>
          <p class="grad-section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed faucibus diam, ut lacinia nisi. Quisque justo est, facilisis ac diam vitae.</p>
          <div class="grad-row">
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
          </div>
        </div>

        <br/>
        <br/>
        <br/>

        <div class="grad-hunt">
          <h4 class="grad-h4">The Hunt</h4>
          <p class="grad-section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed faucibus diam, ut lacinia nisi. Quisque justo est, facilisis ac diam vitae.</p>
          <div class="grad-row">
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
          </div>
        </div>
        
        <br/>
        <br/>
        <br/>

        <div class="grad-application">
          <h4 class="grad-h4">The Application &amp; Interview</h4>
          <p class="grad-section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed faucibus diam, ut lacinia nisi. Quisque justo est, facilisis ac diam vitae.</p>
          <div class="grad-row">
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
          </div>
        </div>

        <br/>
        <br/>
        <br/>

        <div class="grad-first">
          <h4 class="grad-h4">The First Week</h4>
          <p class="grad-section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed faucibus diam, ut lacinia nisi. Quisque justo est, facilisis ac diam vitae.</p>
          <div class="grad-row">
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
            <div class="col-md-3">
              <div><img src="http://www.placehold.it/200x200" alt="" class="grad-img"></div>
              <div><img src="http://uxrepo.com/static/icon-sets/flat-arrows/svg/plain-flat-double-chevron-down-arrow.svg" alt="" width="50px"></div>
              <div>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
                <p class="grad-link"><a href="#">External link w/ title name</a></p>
              </div>
            </div>
          </div>
        </div>


        <div class="grad-email">
          <h2>Like This? Want More?</h2>
          <p class="grad-section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed faucibus diam, ut lacinia nisi. Quisque justo est, facilisis ac diam vitae.</p>

          <form method="post" action="<?php echo home_url(); ?>/subscribe.php">
            <input type="text" class="grad-email-input" name="email" placeholder="Enter Email Address">
            <input name="vars[username]" type="text" style="display:none;" />
            <input type="submit" class="grad-submit" value="Submit">
            <input type="hidden" name="national" value="1">
            <input type="hidden" name="vars[source]" value="grad-guide" />
            <input type="hidden" name="redirect" value="<?php echo home_url(); ?>/subscribe.php">
          </form>
        </div>

        <div class="grad-social">
          <h2>Social media section</h2>
        </div>




      </div>
     


    <?php endwhile; ?>

  </div>
</div>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>