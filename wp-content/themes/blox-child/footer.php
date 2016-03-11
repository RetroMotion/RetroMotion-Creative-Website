    <?php zilla_content_end(); ?>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-71641373-1', 'auto');
	  ga('require', 'linkid');
	  ga('send', 'pageview');

	</script>
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','//connect.facebook.net/en_US/fbevents.js');

	fbq('init', '957977350948639');
	fbq('track', "PageView");
	fbq('track', 'ViewContent');</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=957977350948639&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	
    <?php if( !is_page_template('template-portfolio.php') && !is_singular('portfolio') && !is_post_type_archive( 'portfolio' ) ) { ?>
		<!-- END #content -->
		</div>
	<?php } ?>
	
	<!--BEGIN .footer-outer -->
	<div class="footer-outer">

		<?php zilla_footer_before(); ?>
			
		<!-- BEGIN #footer -->
		<div id="footer">
		    
		    <?php zilla_footer_start(); ?>

		    <?php zilla_nav_before(); ?>
		    <?php if( has_nav_menu( 'footer-menu' ) ) {
		        wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => 'div', 'container_id' => 'footer-nav', 'depth' => 1 ) ); 
		    } ?>
			<?php zilla_nav_after(); ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<a href="http://retromotion.co"><img class="footer-logo" src="../wp-content/uploads/2016/02/rm-creative-white-full-sm-300w.png" width="100"></a>
						<p class="copyright"><strong>Vermont (Mothership)</strong><br>
						188 Allen Brook Lane<br>
						Suite 2<br>
						Williston, VT 05495<br>
						<a href="https://www.google.com/maps/place/RetroMotion+Creative/@44.4523491,-73.1046783,17z/data=!4m7!1m4!3m3!1s0x4cca7858fd7d0d41:0xce3b59cd7c915a84!2sRetroMotion+Creative!3b1!3m1!1s0x4cca7858fd7d0d41:0xce3b59cd7c915a84" target="_blank"><i class="fa fa-map-marker"></i> Directions</a><br></p>
												
						<p class="copyright"><strong>Washington DC (Satellite)</strong><br>
						9841 Washingtonian Blvd<br>
						Gaithersburg, MD 20878<br>
						<a href="https://www.google.com/maps/place/9841+Washingtonian+Blvd,+Gaithersburg,+MD+20878/data=!4m2!3m1!1s0x89b62d519e2d838b:0x17ad1c28b44b6647?sa=X&ved=0ahUKEwiD-IW5hYTLAhVD2yYKHfalCxMQ8gEIGzAA" target="_blank"><i class="fa fa-map-marker"></i> Directions</a><br></p>
						
						<p class="copyright">
						<a href="tel:8028467532" target="_blank"><i class="fa fa-phone-square"></i> 802.846.7532</a><br>
						<a href="mailto:hey@retromotion.co" target="_blank"><i class="fa fa-envelope-square"></i> hey@retromotion.co</a><br>
						</p>
						<br>
						<p class="copyright">© 2016 RetroMotion Creative, LLC</p>
					</div>
					<div class="col-md-3">
						<p class="copyright" style="padding-top:128px;">
							<a href="/"><strong>Home</strong></a><br>
							<a href="/blog"><strong>Blog</strong></a><br>
							<a href="/team"><strong>Team</strong></a><br>
							<a href="/join-us"><strong>Join Retro</strong></a><br>
						</p>
					</div>
					<div class="col-md-6">
						<p class="social-right">
						<a href="http://www.facebook.com/retromotioncreative" target="_blank"><i class="fa fa-facebook-square"></i></a>
						<a href="http://twitter.com/retromotionco" target="_blank"><i class="fa fa-twitter-square"></i></a>
						<a href="http://vimeo.com/retromotion" target="_blank"><i class="fa fa-vimeo-square"></i></a>
						<a href="http://www.linkedin.com/company/retromotion-creative" target="_blank"><i class="fa fa-linkedin-square"></i></a><br>
						</p>
					</div>
					
				</div>
		    </div>
			
			
		
		    <?php zilla_footer_end(); ?>
		    
		<!-- END #footer -->
		</div>
		
		<?php zilla_footer_after(); ?>
	
	<!--END .footer-outer -->	
	</div>

	<a href="#" id="back-to-top"></a>

	<!-- Theme Hook -->
	<?php wp_footer(); ?>
	<?php zilla_body_end(); ?>
			
	<!-- <?php echo 'Ran '. $wpdb->num_queries .' queries '. timer_stop(0, 2) .' seconds'; ?> -->
<!--END body-->
</body>
<!--END html-->
</html>