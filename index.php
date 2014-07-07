<?php get_header(); ?>
<?php $mainoptions = get_option('main_theme_options'); ?>
<div class="container">
	<div class="content-index">
		<div class="one-third">
			<a href="<?php echo $mainoptions['Blurb1Link']; ?>"><img src="<?php echo $mainoptions['Blurb1Img']; ?>"></a>
			<p class="caps"><a href="<?php echo $mainoptions['Blurb1Link']; ?>"><?php echo $mainoptions['Blurb1Title']; ?></a></p>
		</div>
		<div class="one-third">
			<a href="<?php echo $mainoptions['Blurb2Link']; ?>"><img src="<?php echo $mainoptions['Blurb2Img']; ?>"></a>
			<p class="caps"><a href="<?php echo $mainoptions['Blurb2Link']; ?>"><?php echo $mainoptions['Blurb2Title']; ?></a></p>
		</div>
		<div class="one-third">
			<a href="<?php echo $mainoptions['Blurb3Link']; ?>"><img src="<?php echo $mainoptions['Blurb3Img']; ?>"></a>
			<p class="caps"><a href="<?php echo $mainoptions['Blurb3Link']; ?>"><?php echo $mainoptions['Blurb3Title']; ?></a></p>
		</div>
	</div>
	<div class="content">
		<div class="full">
			<h1><?php echo $mainoptions['ContentTitle']; ?></h1>
			<?php echo $mainoptions['Content']; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>