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

	
    <?php if( !is_page_template('template-portfolio.php') && !is_singular('portfolio') && !is_post_type_archive( 'portfolio' ) ) { ?>
		<!-- END #content -->
		</div>
	<?php } ?>

	<!--BEGIN .footer-outer -->
	<div class="footer-outer footer-landing">

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
						<img class="footer-logo" src="/wp-content/uploads/2016/02/rm-creative-white-full-sm-300w.png" width="100">

						<br>
						<p class="copyright">© 2016 RetroMotion Creative, LLC</p>
					</div>
					<div class="col-md-3">

					</div>
					<div class="col-md-3">

					</div>
					<div class="col-md-3">
						<p>Give us a ring</p>
						<a href="tel:8028467532"><h2><i class="fa fa-phone-square" aria-hidden="true"></i> 802.846.7532</h2></a>
					</div>
				</div>
		    </div>



		    <?php zilla_footer_end(); ?>

		<!-- END #footer -->
		</div>

		<?php zilla_footer_after(); ?>

	<!--END .footer-outer -->
	</div>
	<script>

		$("[data-toggle=tooltip").tooltip();

	</script>
	<a href="#" id="back-to-top"></a>

	<!-- Theme Hook -->
	<?php wp_footer(); ?>
	<?php zilla_body_end(); ?>

	<!-- <?php echo 'Ran '. $wpdb->num_queries .' queries '. timer_stop(0, 2) .' seconds'; ?> -->
<!--END body-->
</body>
<!--END html-->
</html>
