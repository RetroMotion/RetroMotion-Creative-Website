    <?php zilla_content_end(); ?>


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

						<p class="copyright">
						<a href="tel:8028467532" target="_blank"><i class="fa fa-phone-square"></i> 802.846.7532</a><br>
						<a href="mailto:hey@retromotion.co" target="_blank"><i class="fa fa-envelope-square"></i> hey@retromotion.co</a><br>
						</p>
						<br>
						<p class="copyright">© 2016 RetroMotion Creative, LLC</p>
					</div>
					<div class="col-md-3">
						<p class="copyright-2">
							<a href="/"><strong>Home</strong></a><br>
							<a href="/blog"><strong>Blog</strong></a><br>
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
	<script>

		$("[data-toggle=tooltip").tooltip();

	</script>
	<a href="#" id="back-to-top"></a>

	<!-- Theme Hook -->
	<?php wp_footer(); ?>
	<?php zilla_body_end(); ?>

	<!-- <?php echo 'Ran '. $wpdb->num_queries .' queries '. timer_stop(0, 2) .' seconds'; ?> -->
	<!-- begin olark code -->
	<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
	f[z]=function(){
	(a.s=a.s||[]).push(arguments)};var a=f[z]._={
	},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
	f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
	0:+new Date};a.P=function(u){
	a.p[u]=new Date-a.p[0]};function s(){
	a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
	hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
	return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
	b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
	b.contentWindow[g].open()}catch(w){
	c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
	var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
	b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
	loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
	/* custom configuration goes here (www.olark.com/documentation) */
	olark.identify('1601-577-10-8552');/*]]>*/</script><noscript><a href="https://www.olark.com/site/1601-577-10-8552/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
	<!-- end olark code -->

	<!-- Google Code for Remarketing Tag -->
	<!--------------------------------------------------
	Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
	--------------------------------------------------->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 938905793;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/938905793/?value=0&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>

<!--END body-->
</body>
<!--END html-->
</html>
