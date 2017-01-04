// Sticky Nav used for Neighborhood Guide
window.addScrollPos1 = -500
window.addScrollPos2 = -770


// Even when the window is resized, run this code.
$(window).resize(function(){
  
  // Variables
  var windowHeight = $(window).height();
  
  // Find the value of 94% of the viewport height
  var ninetypercent = .94 * windowHeight;
  
  // When the document is scrolled ninety percent, toggle the classes
  // Does not work in iOS 7 or below
  // Hasn't been tested in iOS 8
  $(document).scroll(function(){
    
    // Store the document scroll function in a variable
    var y = $(this).scrollTop();
    
    // If the document is scrolled 94%
    if( y > ninetypercent) {
      
      // Add the "sticky" class
      $('.guidenav').addClass('sticky');
    } else {
      // Else remove it.
      $('.guidenav').removeClass('sticky');
    }
  });

// Call it on resize.
}).resize();

// places layout

$(document).ready(function(){ 

  $(".place-link").click(function(e){
    e.preventDefault();

    $(".places-table li").removeClass('selected');
    $(this).removeClass('white-link');
    $(".place").addClass('hide');

    $(this).find('li').addClass('selected');
    $(this).addClass('white-link');
    var item_id = $(this).attr('href');
    $(item_id).removeClass('hide');
  });


  $(document).on("scroll", onScroll);
 
  function onScroll(event){
    var scrollPosition = $(document).scrollTop();

    $('.guidenav .a').each(function () {
      var currentLink = $(this);
      var refElement = $(currentLink.attr("href"));
      if (refElement.position().top <= scrollPosition + window.addScrollPos1 && refElement.position().top + refElement.height() > scrollPosition + window.addScrollPos2) {
        $('.guidenav .a').removeClass("nav-active");
        currentLink.addClass("nav-active");
      }
      else{
        currentLink.removeClass("nav-active");
      }
    });
  }


  $(".a").on('click', function (e) {
    e.preventDefault();
    $('html, body').stop().animate({
      'scrollTop': $($(this).attr('href')).offset().top - 100
    }, 500, 'swing', function () {});
  });


  $(".company-wrapper").hover(function () {
    $(this).find('.company-text').show();
  },
  function () {
    $(this).find('.company-text').hide();
  });


 
  

});


