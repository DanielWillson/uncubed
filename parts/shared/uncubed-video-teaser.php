<div id="event-video-teaser" class="clearfix">
	<script>
        $(function() {
            console.log((16 / 9) * $(window).width());
            $('.videoWrapper').css('height', (9 / 16) * $(window).width());
        });

        $(function() {
            $(window).resize(function() {
                $('.videoWrapper').css('height', (9 / 16) * $(window).width());
                
            });
        });
    </script>
    <div class="videoWrapper">
        <iframe id="ytplayer" type="text/html"
src="https://www.youtube.com/embed/YQbGg1hRnUg?autoplay=1&controls=0&enablejsapi=1&modestbranding=1&rel=0&showinfo=0&loop=1&playlist=YQbGg1hRnUg"
frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="video-overlay">
    </div>
</div>
