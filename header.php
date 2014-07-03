<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/script/nivo-slider/themes/default/default.css" type="text/css" media="screen" />

	<!-- Google fonts: Jura and Open Sans -->
	<link href='http://fonts.googleapis.com/css?family=Jura' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!-- nivo theme css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/script/nivo-slider/themes/default/default.css" type="text/css" media="screen" />

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/media.css" type="text/css" media="screen" />

	<!-- nivo slider: css, script, and link to google jquery -->
	<!-- while the full nivo slider files are under nivo slider, the css and js have been placed into style and script for convenience -->
	<!-- Nivo Slider jQuery plugin requires jQuery v1.7+ to work -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/script/jquery.nivo.slider.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(window).load(function() {
   		 $('#slider').nivoSlider();
		});
	</script>

	<!-- allows the height of the slider to change when the width does -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/script/script.js"></script>
</head>
<body onresize="resizeSlider()">
	<div class="container">
		<div class="header">
			<div class="logo">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="ARTISTIC IMPRESSIONS: A showroom &amp; design studio LLC">
				<!-- <h1 class="uppercase"><a href="">ARTISTIC<br>IMPRESSIONS</a></h1>
				<h3 class="caps">A showroom &amp; design studio LLC</h3> -->
			</div>
			<?php wp_nav_menu( array( 
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'nav-menu'
      ) ); ?>
		</div>
	
	