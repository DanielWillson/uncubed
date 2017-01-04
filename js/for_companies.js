    $(document).ready(function(){
      $(".for-companies-edge-container").show();
        $('#for-companies-edge').toggleClass("active");
    });

    
   $(document).ready(function() {
        $('#for-companies-events').click(function() {
          $('#for-companies-edge').not(this).removeClass("active");
            $('#for-companies-delivery').not(this).removeClass("active");
              $('#for-companies-wakefield').not(this).removeClass("active");
                $(this).toggleClass("active");
                  $('.for-companies-events-container').slideToggle("fast");
                    $( ".for-companies-edge-container" ).hide( "fast" );
                      $( ".for-companies-delivery-container" ).hide( "fast" );
                        $( ".for-companies-wakefield-container" ).hide( "fast" );
        });
    });

   $(document).ready(function() {
        $('#for-companies-edge').click(function() {
          $('#for-companies-delivery').not(this).removeClass("active");
            $('#for-companies-events').not(this).removeClass("active");
              $('#for-companies-wakefield').not(this).removeClass("active");
                $(this).toggleClass("active");
                  $('.for-companies-edge-container').slideToggle("fast");
                    $( ".for-companies-events-container" ).hide( "fast" );
                      $( ".for-companies-delivery-container" ).hide( "fast" );
                        $( ".for-companies-wakefield-container" ).hide( "fast" );

        });
    });

      $(document).ready(function() {
        $('#for-companies-delivery').click(function() {
          $('#for-companies-edge').not(this).removeClass("active");
            $('#for-companies-events').not(this).removeClass("active");
              $('#for-companies-wakefield').not(this).removeClass("active");
                $(this).toggleClass("active");
                  $('.for-companies-delivery-container').slideToggle("fast");
                    $( ".for-companies-edge-container" ).hide( "fast" );
                      $( ".for-companies-events-container" ).hide( "fast" );
                        $( ".for-companies-wakefield-container" ).hide( "fast" );
        });
    });

   $(document).ready(function() {
        $('#for-companies-wakefield').click(function() {
          $('#for-companies-edge').not(this).removeClass("active");
            $('#for-companies-events').not(this).removeClass("active");
              $('#for-companies-delivery').not(this).removeClass("active");
                $(this).toggleClass("active");
                  $('.for-companies-wakefield-container').slideToggle("fast");
                    $( ".for-companies-edge-container" ).hide( "fast" );
                      $( ".for-companies-delivery-container" ).hide( "fast" );
                        $( ".for-companies-events-container" ).hide( "fast" );
        });

    });

    var delayb4scroll=2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
    var marqueespeed=2 //Specify marquee scroll speed (larger is faster 1-10)
    var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

    ////NO NEED TO EDIT BELOW THIS LINE////////////

    var copyspeed=marqueespeed
    var pausespeed=(pauseit==0)? copyspeed: 0
    var actualheight=''

    function scrollmarquee(){
        
      //If the scroll position is greater than some point
      if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8)){
          //Set the position to slightly higher than it was
          cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px"
          backup_marquee.style.top=parseInt(backup_marquee.style.top)-copyspeed+"px"
      }
      //Else if the scroll position is too small
      else {
          //Reset the position to this point vvvvvvvvvvvvvvvvvv
          //cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
          cross_marquee.style.top= "0px";
          backup_marquee.style.top=actualheight + "px";
      }
    }

    function initializemarquee(){
      console.log()
      
      //This is where we set Position 1, the starting position
      cross_marquee=document.getElementById("vmarquee")
      cross_marquee.style.top=0     //<-- Right Here
      
      //This is the height of the marquee text
      actualheight=cross_marquee.offsetHeight
      
      //This is where we set Position 1, the starting position
      backup_marquee=document.getElementById("wmarquee");
      backup_marquee.style.top=actualheight + "px";
      
      //This is the height of the marquee container
      marqueeheight=document.getElementById("marquee").offsetHeight
      
      //This is some special stuff, hopefully we won't need to mess with it.
      if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
        cross_marquee.style.height=marqueeheight+"px"
        cross_marquee.style.overflow="scroll"
      return
      }
    setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
    }

    if (window.addEventListener)
      window.addEventListener("load", initializemarquee, false)
    else if (window.attachEvent)
      window.attachEvent("onload", initializemarquee)
    else if (document.getElementById)
      window.onload=initializemarquee