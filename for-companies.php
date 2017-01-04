<?php
/* 
Template Name: For Companies
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

      <div class="for-companies-hero-container">
        <div class="for-companies-hero-text">
          <div class="for-companies-companies-content">
            <div class="for-companies-main-text">
              <h2>Connect with our community</h2>
              <br>
              <h4>Meet talented, connected individuals interested in discovering new products and new ways to work.</h4>
              <br>
              <br>
              <br>
              <h4>Our products and services include</h4>
              <div class="companies-buttons">
                <a class="companies-btn btn" id="for-companies-edge">Edge</a> 
                <a class="companies-btn btn" id="for-companies-events">Events</a>  
                <a class="companies-btn btn" id="for-companies-delivery">Delivery</a> 
                <a class="companies-btn btn" id="for-companies-wakefield">Wakefield</a>
              </div>
            </div>
            <div class="for-companies-moving-text">
              <div id="marquee">
                <div id="marquee" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
                  <div id="vmarquee" style="position: absolute; width: 98%;">
                    <h4>BuzzFeed</h4>
                    <h4>Dropbox</h4>
                    <h4>SoundCloud</h4>
                    <h4>SpaceX</h4>
                    <h4>Meetup</h4>
                    <h4>Evernote</h4>
                    <h4>Venmo</h4>
                    <h4>BlueApron</h4>
                    <h4>Gogo</h4>
                    <h4>Shutterstock</h4>
                    <h4>Tinder</h4>
                    <h4>Oscar</h4>
                    <h4>Lending Club</h4>
                    <h4>Rent the Runway</h4>
                    <h4>Media Temple</h4>
                    <h4>Adobe</h4>
                    <h4>Grindr</h4>
                    <h4>OnDeck</h4>
                    <h4>Red Bull</h4>
                    <h4>WeWork</h4>
                    <h4>Simulmedia</h4>
                    <h4>NFL Media</h4>
                    <h4>Sailthru</h4>
                    <h4>Spring</h4>
                    <h4>TeleSign</h4>
                    <h4>Foursquare</h4>
                    <h4>SingleHop</h4>
                    <h4>Greenhouse</h4>
                    <h4>Sols</h4>
                    <h4>Laurel & Wolf</h4>
                    <h4>Amplify</h4>
                    <h4>Intent Media</h4>
                     <h4>Red Frog Events</h4>
                    <h4>Curalate</h4>
                    <h4>Harry's</h4>
                    <h4>Priceline</h4>
                    <h4>RedPad</h4>
                    <h4>AppNexus</h4>
                    <h4>Liveperson</h4>
                    <h4>Percolate</h4>
                    <h4>BounceExchange</h4>
                  </div>
                </div>
                <div id="wmarquee" style="position: absolute;">
                    <div class="scrolling-companies">
                    <h4>BuzzFeed</h4>
                    <h4>Dropbox</h4>
                    <h4>SoundCloud</h4>
                    <h4>SpaceX</h4>
                    <h4>Meetup</h4>
                    <h4>Evernote</h4>
                    <h4>Venmo</h4>
                    <h4>BlueApron</h4>
                    <h4>Gogo</h4>
                    <h4>Shutterstock</h4>
                    <h4>Tinder</h4>
                    <h4>Oscar</h4>
                    <h4>Lending Club</h4>
                    <h4>Rent the Runway</h4>
                    <h4>Media Temple</h4>
                    <h4>Adobe</h4>
                    <h4>Grindr</h4>
                    <h4>OnDeck</h4>
                    <h4>Red Bull</h4>
                    <h4>WeWork</h4>
                    <h4>Simulmedia</h4>
                    <h4>NFL Media</h4>
                    <h4>Sailthru</h4>
                    <h4>Spring</h4>
                    <h4>TeleSign</h4>
                    <h4>Foursquare</h4>
                    <h4>SingleHop</h4>
                    <h4>Greenhouse</h4>
                    <h4>Sols</h4>
                    <h4>Laurel & Wolf</h4>
                    <h4>Amplify</h4>
                    <h4>Intent Media</h4>
                     <h4>Red Frog Events</h4>
                    <h4>Curalate</h4>
                    <h4>Harry's</h4>
                    <h4>Priceline</h4>
                    <h4>RedPad</h4>
                    <h4>AppNexus</h4>
                    <h4>Liveperson</h4>
                    <h4>Percolate</h4>
                    <h4>BounceExchange</h4>
                  </div>
                </div>
              </div>
            </div>
            <br />
          </div>
        </div>
      </div>

      <div id="for-companies-events" class="for-companies-events-container" style="display:none">
        <div class="for-companies-events-text">
          <div class="for-companies-events-main">
            <h4>Nearly 1,000 startups and other high-growth companies have come to our events to grow their teams and reach our audience at our Uncubed conferences.</h4>
            <h4>Meet talented programmers, product and design, digital marketing and sales folks in New York, Chicago, Los Angeles, and San Francisco. </h4>
            <h4>Looking to sponsor? We design and execute all of our sponsor activations. They’re custom. They work. They’re fun. (Occasionally they involve bounce castles.) Get in touch. </h4>
            <h4>Upcoming events:</h4>
            <div class="for-companies-events-locations">
                <a href="http://nyc.uncubed.com/hq" class="events-btn btn" target="_blank">New York City</a> 
                <a href="http://la.uncubed.com/hq" class="events-btn btn" target="_blank">Los Angeles</a> 
                <a href="http://sf.uncubed.com/" class="events-btn btn" target="_blank">San Francisco</a> 
                <a href="http://chicago.uncubed.com/" class="events-btn btn" target="_blank">Chicago</a>
            </div>
            <h4 class="for-companies-events-locations-link">We also run local meetups. Join our <a href="http://www.meetup.com/uncubed/" target="_blank">meetup</a> to keep an eye out for those. </h4>
            <br>
            <br>
          </div>
          <div class="for-companies-events-blurb bubble">
            <h4>"Not only did we hire a number of candidates directly from the conference, we noticed a 3x increase in traffic to our career page afterwards." - OnDeck</h4>
          </div>
        </div>
        <div class="for-companies-company-background">
        <div class="for-companies-company-container">
          <h4>Uncubed has helped hundreds of fast growing companies</h4>
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Adobe" src="https://s3.amazonaws.com/uncubed-static/for-companies/Adobe.png" style="size:height: 100px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Meetup" src="https://s3.amazonaws.com/uncubed-static/for-companies/meetup-logo.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Buzzfeed" src="https://s3.amazonaws.com/uncubed-static/for-companies/buzzfeed-new.png" style="size:height: 100px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Dropbox" src="https://s3.amazonaws.com/uncubed-static/for-companies/dropbox-new.png" style="size:height: 100px; width:80px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Evernote" src="https://s3.amazonaws.com/uncubed-static/for-companies/evernote.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Gogo" src="https://s3.amazonaws.com/uncubed-static/for-companies/gogo.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Red Bull" src="https://s3.amazonaws.com/uncubed-static/for-companies/redbull.png" style="size:height: 100px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Shuttershock" src="https://s3.amazonaws.com/uncubed-static/for-companies/shutterstock.png" style="size:height: 150px; width:110px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Soundcloud" src="https://s3.amazonaws.com/uncubed-static/for-companies/soundcloud.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="SpaceX" src="https://s3.amazonaws.com/uncubed-static/for-companies/spacex.png" style="size:height: 150px; width:110px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Tinder" src="https://s3.amazonaws.com/uncubed-static/for-companies/tinder.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="IBM Watson" src="https://s3.amazonaws.com/uncubed-static/for-companies/watson.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
          </div>
        </div>
      </div>
      </div>

      <div id="for-companies-edge" class="for-companies-edge-container" style="display: none">
        <div class="for-companies-edge-text">
          <h4>Really want to reach an audience? Teach them something.</h4>
          <h4>The next wave of content marketing is education. We’re pretty sure of it. In fact, we built a whole platform around it. It’s called Uncubed Edge.</h4>
          <h4>It’s where companies like Gilt, Barkbox, Oscar, Chartbeat, Sumall and other startups teach short online course in tech, product, or business to the fast-growing Uncubed community.</h4>
          <h4>You know. It’s like the old proverb: Give a man a fish, you feed him for a day; teach him relevant skills in tech, product, and business, and he’ll love your company for a lifetime. (He will also probably want to work there.)</h4>
          <h4>Let’s get you set up: inquire <a href="mailto:edge@uncubed.com">here</a>.</h4>
        </div>
        <div class="for-companies-edge-photo">
          <a href="http://edge.uncubed.com/course/oscar-ad" target="_blank">
            <img src="https://s3.amazonaws.com/uncubed-static/for-companies/edge-banner-play.png" alt="Edge Video">
          </a>
        </div>
        <div class="for-companies-edge-companies">
          <!-- <h4>Take a peak at some of our client videos:</h4>
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="BarkBox" src="https://s3.amazonaws.com/uncubed-static/for-companies/barkbox.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Gilt" src="https://s3.amazonaws.com/uncubed-static/for-companies/Gilt+copy.png" style="size:height: 150px; width:75px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Chartbeat" src="https://s3.amazonaws.com/uncubed-static/for-companies/chartbeat.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Grindr" src="https://s3.amazonaws.com/uncubed-static/for-companies/grindr.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Contently" src="https://s3.amazonaws.com/uncubed-static/for-companies/contently.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Intent Media" src="https://s3.amazonaws.com/uncubed-static/for-companies/intent.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Red Frog Events" src="https://s3.amazonaws.com/uncubed-static/for-companies/redfrogevents.png" style="size:height: 150px; width:75px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="mediamorph" src="https://s3.amazonaws.com/uncubed-static/for-companies/mediamorph.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Originate" src="https://s3.amazonaws.com/uncubed-static/for-companies/originate.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Oscar" src="https://s3.amazonaws.com/uncubed-static/for-companies/oscar.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Sailthru" src="https://s3.amazonaws.com/uncubed-static/for-companies/sailthru-logo.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Spartz" src="https://s3.amazonaws.com/uncubed-static/for-companies/spartz.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Splash" src="https://s3.amazonaws.com/uncubed-static/for-companies/splash+copy.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="SumAll" src="https://s3.amazonaws.com/uncubed-static/for-companies/sumall.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Tradesy" src="https://s3.amazonaws.com/uncubed-static/for-companies/tradesy.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
    
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
              <img alt="Uncubed" src="https://s3.amazonaws.com/uncubed-static/for-companies/uncubed-website-logo.jpg" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
          </div> -->
          <h4>Check it all out at <a href="http://edge.uncubed.com" target="_blank">http://edge.uncubed.com</a> <br> or <a href="mailto:edge@uncubed.com" target="_blank">email us</a> to reserve a shoot.</h4>
        </div>
        <div class="for-companies-company-background">
        <div class="for-companies-company-container">
          <h4>Uncubed has helped hundreds of fast growing companies</h4>
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Adobe" src="https://s3.amazonaws.com/uncubed-static/for-companies/Adobe.png" style="size:height: 100px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Meetup" src="https://s3.amazonaws.com/uncubed-static/for-companies/meetup-logo.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Buzzfeed" src="https://s3.amazonaws.com/uncubed-static/for-companies/buzzfeed-new.png" style="size:height: 100px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Dropbox" src="https://s3.amazonaws.com/uncubed-static/for-companies/dropbox-new.png" style="size:height: 100px; width:80px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Evernote" src="https://s3.amazonaws.com/uncubed-static/for-companies/evernote.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Gogo" src="https://s3.amazonaws.com/uncubed-static/for-companies/gogo.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Red Bull" src="https://s3.amazonaws.com/uncubed-static/for-companies/redbull.png" style="size:height: 100px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Shuttershock" src="https://s3.amazonaws.com/uncubed-static/for-companies/shutterstock.png" style="size:height: 150px; width:110px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Soundcloud" src="https://s3.amazonaws.com/uncubed-static/for-companies/soundcloud.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="SpaceX" src="https://s3.amazonaws.com/uncubed-static/for-companies/spacex.png" style="size:height: 150px; width:110px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Tinder" src="https://s3.amazonaws.com/uncubed-static/for-companies/tinder.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="IBM Watson" src="https://s3.amazonaws.com/uncubed-static/for-companies/watson.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
          </div>
        </div>
      </div>
      </div>

      <div id="for-companies-delivery" class="for-companies-delivery-container" style="display: none">
        <div class="for-companies-delivery-text">
          <h4>Uncubed Delivery is a simple, cost effective way to get a batch of curated candidates sent to your inbox every month. It’s exactly like using a headhunter – without the headhunter. </h4>
          <h4>Get more info <a href="mailto:delivery@uncubed.com">here</a>. </h4>
        </div>
        <div class="for-companies-delivery-numbers mobile show">
          <ul class="row">
            <li class="non-border">
              <div class="col-md-4 col-sm-4">
                <h4 class="circle-border">1</h4>
                <p>Candidates apply.</p>
              </div>
            </li>

            <li class="left-border">
              <div class="col-md-4 col-sm-4">
                <h4 class="circle-border">2</h4>
                <p>We send you relevant candidates we approve.</p>
              </div>
            </li>
            <li class="non-border">
              <div class="col-md-4 col-sm-4">
                <h4 class="circle-border">3</h4>
                <p>You contact those you want to interview.</p>
              </div>
            </li>
          </ul>
          <br>
          <a class="for-companies-delivery-btn btn" href="http://delivery.uncubed.com" target="_blank">Order Delivery</a>
        </div>
        <div class="for-companies-company-background">
        <div class="for-companies-company-container">
          <h4>Uncubed has helped hundreds of fast growing companies</h4>
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Adobe" src="https://s3.amazonaws.com/uncubed-static/for-companies/Adobe.png" style="size:height: 100px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Meetup" src="https://s3.amazonaws.com/uncubed-static/for-companies/meetup-logo.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Buzzfeed" src="https://s3.amazonaws.com/uncubed-static/for-companies/buzzfeed-new.png" style="size:height: 100px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Dropbox" src="https://s3.amazonaws.com/uncubed-static/for-companies/dropbox-new.png" style="size:height: 100px; width:80px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Evernote" src="https://s3.amazonaws.com/uncubed-static/for-companies/evernote.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Gogo" src="https://s3.amazonaws.com/uncubed-static/for-companies/gogo.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Red Bull" src="https://s3.amazonaws.com/uncubed-static/for-companies/redbull.png" style="size:height: 100px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Shuttershock" src="https://s3.amazonaws.com/uncubed-static/for-companies/shutterstock.png" style="size:height: 150px; width:110px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Soundcloud" src="https://s3.amazonaws.com/uncubed-static/for-companies/soundcloud.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="SpaceX" src="https://s3.amazonaws.com/uncubed-static/for-companies/spacex.png" style="size:height: 150px; width:110px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Tinder" src="https://s3.amazonaws.com/uncubed-static/for-companies/tinder.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="IBM Watson" src="https://s3.amazonaws.com/uncubed-static/for-companies/watson.png" style="size:height: 150px; width:100px" class="desaturate">
            </div>
          </div>
        </div>
      </div>
      </div>

      <div id="for-companies-wakefield" class="for-companies-wakefield-container" style="display: none">
        <div class="for-companies-wakefield-text">
          <h4>Uncubed publishes Wakefield, the widely-read digital magazine on what’s happening in tech and digital. Wakefield is followed by a fast-growing national audience of millennials along with some of the most influential leaders in the tech industry.</h4>
          <h4>Sound like your target audience? We’ve dreamt up sponsored content and other creative campaigns for established brands and fast-growing startups alike. </h4>
          <h4>Request media kit <a href="mailto:contact@uncubed.com" target="_blank">here</a>.</h4>
        </div>
        <!-- <div class="for-companies-wakefield-stats">
          <div class="row">
            <div class="wakefield-list-title for-companies-stats-list">
              <ul>
                <li>Investors</li>
                <li>Creatives</li>
                <li>Tech Obsessed</li>
                <li>Career-Changers</li>
                <li>Innovation Leaders</li>
                <li>Modern, Creative Workforce</li>
              </ul>
            </div>
          <div class="wakefield-gender-list for-companies-stats-list">
            <img src="  
https://s3.amazonaws.com/uncubed-static/for-companies/people-stats.png" alt="User Stats" style="width: 113px; height: 113px">
            <h4>50% &nbsp; 50%</h4>
          </div>
          <div class="wakefield-age-list for-companies-stats-list">
            <h2>25-40 <br> age range</h2>
          </div>
          <div class="wakefield-school-list for-companies-stats-list">
            <img src="https://s3.amazonaws.com/uncubed-static/for-companies/college-stats.png" alt="User Stats" style="width: 115px; height: 115px">
            <h4>college educated</h4>
          </div>
        </div>
      </div>
      <br> -->

      <div class="for-companies-company-background">
        <div class="for-companies-company-container">
          <h4>Uncubed has helped hundreds of fast growing companies</h4>
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Adobe" src="https://s3.amazonaws.com/uncubed-static/for-companies/Adobe.png" style="size:height: 100px; width:100px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Meetup" src="https://s3.amazonaws.com/uncubed-static/for-companies/meetup-logo.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Buzzfeed" src="https://s3.amazonaws.com/uncubed-static/for-companies/buzzfeed-new.png" style="size:height: 100px; width:100px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Dropbox" src="https://s3.amazonaws.com/uncubed-static/for-companies/dropbox-new.png" style="size:height: 100px; width:80px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Evernote" src="https://s3.amazonaws.com/uncubed-static/for-companies/evernote.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Gogo" src="https://s3.amazonaws.com/uncubed-static/for-companies/gogo.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Red Bull" src="https://s3.amazonaws.com/uncubed-static/for-companies/redbull.png" style="size:height: 100px; width:100px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Shuttershock" src="https://s3.amazonaws.com/uncubed-static/for-companies/shutterstock.png" style="size:height: 150px; width:110px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Soundcloud" src="https://s3.amazonaws.com/uncubed-static/for-companies/soundcloud.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="SpaceX" src="https://s3.amazonaws.com/uncubed-static/for-companies/spacex.png" style="size:height: 150px; width:110px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="Tinder" src="https://s3.amazonaws.com/uncubed-static/for-companies/tinder.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
  
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 for-companies-company-wrapper">
              <img alt="IBM Watson" src="https://s3.amazonaws.com/uncubed-static/for-companies/watson.png" style="size:height: 150px; width:100px" class="desaturate" />
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
