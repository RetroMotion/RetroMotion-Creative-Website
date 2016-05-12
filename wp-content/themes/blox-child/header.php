<!DOCTYPE html>

<!-- BEGIN html -->
<html <?php language_attributes(); ?>>

<!-- BEGIN head -->
<head>

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Title -->
	<title><?php wp_title('|', true, 'right'); ?></title>
	
	<!-- RSS & Pingbacks -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php if(zilla_get_option('general_feedburner_url')){ echo zilla_get_option('general_feedburner_url'); } else { bloginfo( 'rss2_url' ); } ?>" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Sanchez:400,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!--favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="msapplication-navbutton-color" content="#f57f25">
	<meta name="theme-color" content="#f57f25">
	

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">



	<?php wp_head(); ?>
    <?php zilla_head(); ?>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

   	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
<!-- END head -->
</head>

<!-- BEGIN body -->
<body <?php body_class('no-js'); ?>>
	
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PG8W3R"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PG8W3R');</script>
	<!-- End Google Tag Manager -->

    <?php zilla_body_start(); ?>

    <div class="header-outer">
		
	    <?php zilla_header_before(); ?>
		<!-- BEGIN #header -->
		<div id="header" class="clearfix">
		<?php zilla_header_start(); ?>
			
			<!-- BEGIN #logo -->
			<div id="logo">
				<?php /*
				If "plain text logo" is set in theme options then use text
				if a logo url has been set in theme options then use that
				if none of the above then use the default logo.png */
				if (zilla_get_option('general_text_logo') == 'on') { ?>
					<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php } elseif (zilla_get_option('general_custom_logo')) { ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php echo zilla_get_option('general_custom_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
				<?php } else { ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" width="81" height="30" /></a>
				<?php } ?>
			<!-- END #logo -->
			</div>
			
			<?php zilla_nav_before(); ?>
			<?php if( has_nav_menu( 'primary-menu' ) ) {
			    wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => 'div', 'container_id' => 'primary-nav', 'menu_id' => 'primary-menu', 'menu_class' => 'sf-menu' ) ); 
			} ?>
			<?php zilla_nav_after(); ?>
			
		<?php zilla_header_end(); ?>	
		<!--END #header-->
		</div>
		<?php zilla_header_after(); ?>

		<!--BEGIN .page-header -->
		<div class="page-header">
			<?php 
				$page_title = zilla_get_page_title();
				$page_caption = html_entity_decode( zilla_get_page_caption() );

				if( !empty($page_title) ) {
					echo '<h1 class="page-title">' . $page_title . '</h1>';
				}
			?>
			<p class="zilla-caption"><?php echo html_entity_decode($page_caption); ?></p>

		<!--END .page-header -->
		</div>

	<!--END .header-outer -->
	</div>
	
	<?php if( !is_page_template('template-portfolio.php') && !is_singular('portfolio') && !is_post_type_archive( 'portfolio' ) ) { ?>
		<!--BEGIN #content -->
		<div id="content" class="clearfix">
	<?php } ?>

	<?php zilla_content_start(); ?>