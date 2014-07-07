<!DOCTYPE html>
<html>
<head>
	<title><?php echo wp_title(); ?></title>
	<link rel="icon" 
	type="image/png" 
	href="images/favicon.png">

	<!-- Google fonts: Jura and Open Sans -->
	<link href='http://fonts.googleapis.com/css?family=Jura' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!-- css, normalize fixes some cross browser problems -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/media.css">

	<!-- nivo slider: css, script, and link to google jquery -->
	<!-- while the full nivo slider files are under nivo slider, the css and js have been placed into style and script for convenience -->
	<!-- Nivo Slider jQuery plugin requires jQuery v1.7+ to work -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/default.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/nivo-slider.css" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/script/jquery.nivo.slider.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
	</script>

	<!-- allows the height of the slider to change when the width does -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/script.js"></script>
	<?php $mainoptions = get_option('main_theme_options'); ?>
	<?php wp_head(); ?>
</head>
<body onresize="resizeSlider()">
	<div class="container">
		<div class="header">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="ARTISTIC IMPRESSIONS: A Showroom &amp; Design Studio">
			</div>	
			<div class="nav-menu">
				<?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
			</div>
		</div>		
	</div>