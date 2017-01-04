<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script><!--Adaptive Images-->
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
	<?php if ( is_home() ) { 
		echo '<meta property="og:image" content="http://uncubed.com/wp-content/themes/uncubed/images/uncubed-crowd-5.jpg" />'; 
		echo '<meta property="og:title" content="Uncubed" />';
		echo '<meta property="og:description" content="Skills, content, conferences, and jobs to help you find a career you love." />';
		//echo '<meta property="og:url" content="http://uncubed.com" />';
	} ?>
	<?php
		// Horizon Tags

		//Title 
		// $sailthru_title = wp_title('', False);
		// $title_size = strlen($sailthru_title) - 9; // gets rid of ' - Uncubed'
		// $sailthru_title = substr($sailthru_title, 0, $title_size);		 
		$sailthru_title = get_field('subject_line', $post_ID);
		// Thumb Image
		$thumb_id = get_post_thumbnail_id();
		$thumb_data = wp_get_attachment_image_src( $thumb_id );

		//Date
		$the_post = get_post($post_ID);
		$dateline = $the_post->post_date;
	?>
	<meta name="sailthru.title" content="<?php echo $sailthru_title; ?>" />
	<meta name="sailthru.images.thumb" value="uncubed.com/timthumb.php?src=<?php echo $thumb_data[0]; ?>&h=197&w=300&zc=1&a=c" />
	<!-- <meta name="old_thumb" content="<?php echo $thumb_data[0]; ?>" /> -->
	<meta name="sailthru.date" content="<?php echo $dateline; ?>" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico?v=4"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<?php if (is_single()) { ?>
	<script src="<?php echo home_url(); ?>/wp-content/themes/uncubed/js/article-scripts.js"></script>
	<?php } ?>
	<?php wp_head(); ?>
	<script src="<?php echo home_url(); ?>/wp-content/themes/uncubed/js/blocks-slider.js"></script>
	<script src="<?php echo home_url(); ?>/wp-content/themes/uncubed/js/sticky-nav.js"></script>
	<script src="<?php echo home_url(); ?>/wp-content/themes/uncubed/js/for_companies.js"></script>
	<script>
	  jQuery(document).ready(function ($) {
		$.getScript('//tru.am/scripts/ta-pagesocial-sdk.js', function () {
	  	window.TRUE_ANTHEM.configure('243');
		});
	  });
	</script>
	<?php /* this is the new reporting for the Uncubed property w/ demographics n stuff */ ?>
	<script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  	ga('create','UA-30944811-3','auto');
	ga('require','displayfeatures');
	ga('require','linkid','linkid.js');
  	ga('send','pageview');
	</script>
	<?php if (!isset($_COOKIE['viewedOuibounceModal']) && !isset($_GET['ws'])) { ?>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css">
	<!-- <script src="<?php echo home_url(); ?>/wp-content/themes/uncubed/js/vex.min.js"></script> -->
	<!--<link rel="stylesheet" href="<?//php echo home_url(); ?>/wp-content/themes/uncubed/css/vex.css">
	<link rel="stylesheet" href="<?//php echo home_url(); ?>/wp-content/themes/uncubed/css/vex-theme-wireframe.css">-->
	<link href="https://plus.google.com/+UncubedOfficial" rel="publisher" />
	<script src="http://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.8/ouibounce.min.js"></script>
	<!-- Start Visual Website Optimizer Asynchronous Code -->
	<script type='text/javascript'>
	var _vwo_code=(function(){
	var account_id=98361,
	settings_tolerance=2000,
	library_tolerance=2500,
	use_existing_jquery=false,
	// DO NOT EDIT BELOW THIS LINE
	f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
	</script>
	<!-- End Visual Website Optimizer Asynchronous Code -->
	<script>
		// vex.defaultOptions.className = 'vex-theme-wireframe';
		// var _ouibounce = ouibounce(false, {
		// 	cookieDomain: ".uncubed.com",
		// 	sitewide: true,
		// 	callback: function() {
				// findout what page you are on
				// var pathname = window.location.pathname.replace(/^\/([^\/]*).*$/, '$1');
				// var content = {
				// 	'about': '<div><p>We deliver! Sign up for our short daily email and get our content in the comfort of your own inbox.</p><br><form method="post" action="http://uncubed.com/subscribe.php"><input type="text" class="email" name="email" placeholder="Enter Email Address"><input name="vars[username]" type="text" style="display:none;"><input type="submit" class="submit" value="SUBMIT"><input type="hidden" name="national" value="1"><input type="hidden" name="redirect" value="http://uncubed.com/subscribe.php"></form></div>',
				// 	'events': '<div><p>We deliver! Sign up for our short daily email and get our content in the comfort of your own inbox.</p><br><form method="post" action="http://uncubed.com/subscribe.php"><input type="text" class="email" name="email" placeholder="Enter Email Address"><input name="vars[username]" type="text" style="display:none;"><input type="submit" class="submit" value="SUBMIT"><input type="hidden" name="national" value="1"><input type="hidden" name="redirect" value="http://uncubed.com/subscribe.php"></form></div>'
				// };

				// if (content[pathname]) {
				// 	vex.open ({
				// 		content: content[pathname]
				// 	});
				// } else {
				// 	vex.open ({
				// 		content: '<div><p class="vex-headline">We deliver!</p><p class="vex-subheadline">Sign up for our short daily email and get our content in the comfort of your own inbox.</p><br><form method="post" action="http://uncubed.com/subscribe.php"><input type="text" class="email" name="email" placeholder="Enter Email Address"><input name="vars[username]" type="text" style="display:none;"><input type="submit" class="submit" value="SUBMIT"><input type="hidden" name="national" value="1"><input type="hidden" name="redirect" value="http://uncubed.com/subscribe.php"></form></div>',
				// 	});
				// }


        // check if document has article-heading(blog title)

				// var blogTitle = document.getElementById("article-heading")

				// finds out if there is a blog title AND if it contains 'LA' for LA Uncubed

				// if (blogTitle && blogTitle.innerHTML.split(' ').indexOf('Chicago') > -1) {
    //     	vex.open ({
    //     		content: "<div><p class='vex-headline chi'>Escape your cubicle & land a job with one of Chicago's leading innovators. <a href='http://chicago.uncubed.com/blog'>Register Here</a></p><p class='vex-subheadline chi'><a href='http://chicago.uncubed.com/blog'><img src='http://uncubed.com/wp-content/uploads/2015/03/chi-uncubed.jpg'></a></p><br></div>"
        		
        		// content: "<div><p>Escape your cubicle & land a job at one of LA's fastest-growing startups. Meet 25+ like Tinder, Media Temple, & ChowNow at LA Uncubed.</p><br><p><a href='http://la.uncubed.com/'>Register Here</a></p></div>"
        	
     //    	});
	    //   } else {
	    //     vex.open({
					// 	content: '<div><p class="vex-headline">We deliver!</p><p class="vex-subheadline">Sign up for our short daily email and get our content in the comfort of your own inbox.</p><br><form method="post" action="http://uncubed.com/subscribe.php"><input type="text" class="email" name="email" placeholder="Enter Email Address"><input name="vars[username]" type="text" style="display:none;"><input type="submit" class="submit" value="SUBMIT"><input type="hidden" name="national" value="1"><input type="hidden" name="redirect" value="http://uncubed.com/subscribe.php"></form></div>',
					// });
	    //   }


		// 	},
		// });
	</script>
	<?php } ?>
</head>
<body <?php body_class(); ?> class="clearfix">
