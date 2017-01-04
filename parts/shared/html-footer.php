
	<?php wp_footer(); ?>

    <!-- Start of Async HubSpot Analytics Code -->
    <script type="text/javascript">
      (function(d,s,i,r) {
        if (d.getElementById(i)){return;}
        var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
        n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/486054.js';
        e.parentNode.insertBefore(n, e);
      })(document,"script","hs-analytics",300000);
    </script>
    <!-- End of Async HubSpot Analytics Code -->

    <!-- Sailthru Horizon -->
    <script type="text/javascript" src="http://ak.sail-horizon.com/horizon/v1.js"></script>
    <!-- if loading for secure domain, use: https://ak.sail-horizon.com/horizon/v1.js -->
    <script type="text/javascript">
    $(function() {
        // Sailthru Concierge
        if (window.Sailthru) {
            Sailthru.setup({
                domain: 'horizon.uncubed.com'
            });
        }
    });
    </script>
  
	</body>
</html>