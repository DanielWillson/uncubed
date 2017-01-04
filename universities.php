<?php

/* 

Template Name: University Resources

*/

?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
$postid = get_the_ID();?>
		
<div id="universities-page" class="clearfix">
	<div id="top-image" style="background: url('<?php echo home_url() ?>/wp-content/themes/uncubed/images/universities.jpg') center no-repeat fixed; background-size: cover;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;">
		<div class="main-container">
			<div id="blurb">
				<h3><strong>Uncubed's University Resources</strong></h3>
				<br />
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<div id="partners-description">
	<div class="main-container">
		<div id="bar">
			<div id="block-heading-container">
				<h3>University Partners</h3>
			</div>
		</div>
		<br />
		<p><?php 
			echo get_post_meta( $postid, 'partners_description', true); 
			?>
		</p>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/university-partners' ) ); ?>
		</div>
	</div>		


	<div id="universities-events">
		<div class="main-container">
			<div id="bar">
				<div id="block-heading-container">
					<h3>Uncubed Conferences</h3>
				</div>
			</div>
			<br />
			<p><?php 
				
				echo get_post_meta( $postid, 'events_description', true); 
				?>
			</p>
		</div>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/events' ) ); ?>

	</div>

	<div id="startup-tours">
		<div class="main-container">
			<div id="bar">
				<div id="block-heading-container">
					<h3>Startup Tours</h3>
				</div>
			</div>
			<br />
			<p><?php 
				echo get_post_meta( $postid, 'tours_description', true); 
				?>
			</p>
			<div class="videoWrapper">
				<iframe src="//www.youtube.com/embed/wdZHnxZAe7k?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/university-testimonials' ) ); ?>
		</div>
	</div>
	
	

	<div id="stay-updated-description">
		<div class="main-container">
			<div id="bar">
				<div id="block-heading-container">
					<h3>Stay Updated</h3>
				</div>
			</div>
			<br />
			<p><?php 
				echo get_post_meta( $postid, 'stay_updated_description', true); 
				?>
			</p>
			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup" style="padding: 30px 0 60px 0;"><form id="mc-embedded-subscribe-form" class="validate" action="http://getuncubed.us4.list-manage.com/subscribe/post?u=1ddf84dbb7c0bd20c1ee41124&amp;id=d2468b3851" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
			<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address</label>
				<input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" />
			</div>
			<div class="mc-field-group">
				<label for="mce-FNAME">First Name</label>
				<input id="mce-FNAME" class="required" name="FNAME" type="text" value="" />
			</div>
			<div class="mc-field-group">
				<label for="mce-LNAME">Last Name</label>
				<input id="mce-LNAME" class="required" name="LNAME" type="text" value="" />
			</div>
			<div class="mc-field-group">
				<label for="mce-UNIVERSITY">University</label>
				<input id="mce-UNIVERSITY" class="required" name="UNIVERSITY" type="text" value="" />
			</div>
			<div class="mc-field-group">
				<label for="mce-MMERGE6">Department</label>
				<input id="mce-MMERGE6" class="required" name="MMERGE6" type="text" value="" />
			</div>
			<div id="mce-responses" class="clear"></div>
			<div style="position: absolute; left: -5000px;"><input tabindex="-1" name="b_1ddf84dbb7c0bd20c1ee41124_d2468b3851" type="text" value="" /></div>
			<br />
			<div class="clear"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Subscribe" /></div>
			</form></div>
			<script>// <![CDATA[
			var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='UNIVERSITY';ftypes[3]='text';fnames[4]='PLANNING';ftypes[4]='text';fnames[5]='THOUGHT';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text'; try {     var jqueryLoaded=jQuery;     jqueryLoaded=true; } catch(err) {     var jqueryLoaded=false; } var head= document.getElementsByTagName('head')[0]; if (!jqueryLoaded) {     var script = document.createElement('script');     script.type = 'text/javascript';     script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';     head.appendChild(script);     if (script.readyState &#038;&#038; script.onload!==null){         script.onreadystatechange= function () {               if (this.readyState == 'complete') mce_preload_check();         }         } } var err_style = ''; try{     err_style = mc_custom_error_style; } catch(e){     err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}'; } var head= document.getElementsByTagName('head')[0]; var style= document.createElement('style'); style.type= 'text/css'; if (style.styleSheet) {   style.styleSheet.cssText = err_style; } else {   style.appendChild(document.createTextNode(err_style)); } head.appendChild(style); setTimeout('mce_preload_check();', 250); var mce_preload_checks = 0; function mce_preload_check(){     if (mce_preload_checks>40) return;
			    mce_preload_checks++;
			    try {
			        var jqueryLoaded=jQuery;
			    } catch(err) {
			        setTimeout('mce_preload_check();', 250);
			        return;
			    }
			    var script = document.createElement('script');
			    script.type = 'text/javascript';
			    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
			    head.appendChild(script);
			    try {
			        var validatorLoaded=jQuery("#fake-form").validate({});
			    } catch(err) {
			        setTimeout('mce_preload_check();', 250);
			        return;
			    }
			    mce_init_form();
			}
			function mce_init_form(){
			    jQuery(document).ready( function($) {
			      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
			      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
			      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
			      options = { url: 'http://getuncubed.us4.list-manage.com/subscribe/post-json?u=1ddf84dbb7c0bd20c1ee41124&#038;id=d2468b3851&#038;c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
			                    beforeSubmit: function(){
			                        $('#mce_tmp_error_msg').remove();
			                        $('.datefield','#mc_embed_signup').each(
			                            function(){
			                                var txt = 'filled';
			                                var fields = new Array();
			                                var i = 0;
			                                $(':text', this).each(
			                                    function(){
			                                        fields[i] = this;
			                                        i++;
			                                    });
			                                $(':hidden', this).each(
			                                    function(){
			                                        var bday = false;
			                                        if (fields.length == 2){
			                                            bday = true;
			                                            fields[2] = {'value':1970};//trick birthdays into having years
			                                        }
			                                    	if ( fields[0].value=='MM' &#038;&#038; fields[1].value=='DD' &#038;&#038; (fields[2].value=='YYYY' || (bday &#038;&#038; fields[2].value==1970) ) ){
			                                    		this.value = '';
												    } else if ( fields[0].value=='' &#038;&#038; fields[1].value=='' &#038;&#038; (fields[2].value=='' || (bday &#038;&#038; fields[2].value==1970) ) ){
			                                    		this.value = '';
												    } else {
												        if (/\[day\]/.test(fields[0].name)){
			    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
												        } else {
			    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
				                                        }
				                                    }
			                                    });
			                            });
			                        $('.phonefield-us','#mc_embed_signup').each(
			                            function(){
			                                var fields = new Array();
			                                var i = 0;
			                                $(':text', this).each(
			                                    function(){
			                                        fields[i] = this;
			                                        i++;
			                                    });
			                                $(':hidden', this).each(
			                                    function(){
			                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
			                                    		this.value = '';
												    } else {
												        this.value = 'filled';
				                                    }
			                                    });
			                            });
			                        return mce_validator.form();
			                    }, 
			                    success: mce_success_cb
			                };
			      $('#mc-embedded-subscribe-form').ajaxForm(options);

			    });
			}
			function mce_success_cb(resp){
			    $('#mce-success-response').hide();
			    $('#mce-error-response').hide();
			    if (resp.result=="success"){
			        $('#mce-'+resp.result+'-response').show();
			        $('#mce-'+resp.result+'-response').html(resp.msg);
			        $('#mc-embedded-subscribe-form').each(function(){
			            this.reset();
			    	});
			    } else {
			        var index = -1;
			        var msg;
			        try {
			            var parts = resp.msg.split(' - ',2);
			            if (parts[1]==undefined){
			                msg = resp.msg;
			            } else {
			                i = parseInt(parts[0]);
			                if (i.toString() == parts[0]){
			                    index = parts[0];
			                    msg = parts[1];
			                } else {
			                    index = -1;
			                    msg = resp.msg;
			                }
			            }
			        } catch(e){
			            index = -1;
			            msg = resp.msg;
			        }
			        try{
			            if (index== -1){
			                $('#mce-'+resp.result+'-response').show();
			                $('#mce-'+resp.result+'-response').html(msg);            
			            } else {
			                err_id = 'mce_tmp_error_msg';
			                html = '

			<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>


			';

			                var input_id = '#mc_embed_signup';
			                var f = $(input_id);
			                if (ftypes[index]=='address'){
			                    input_id = '#mce-'+fnames[index]+'-addr1';
			                    f = $(input_id).parent().parent().get(0);
			                } else if (ftypes[index]=='date'){
			                    input_id = '#mce-'+fnames[index]+'-month';
			                    f = $(input_id).parent().parent().get(0);
			                } else {
			                    input_id = '#mce-'+fnames[index];
			                    f = $().parent(input_id).get(0);
			                }
			                if (f){
			                    $(f).append(html);
			                    $(input_id).focus();
			                } else {
			                    $('#mce-'+resp.result+'-response').show();
			                    $('#mce-'+resp.result+'-response').html(msg);
			                }
			            }
			        } catch(e){
			            $('#mce-'+resp.result+'-response').show();
			            $('#mce-'+resp.result+'-response').html(msg);
			        }
			    }
			}
			// ]]></script>
			<!--End mc_embed_signup-->

		</div>
	</div>

</div>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>