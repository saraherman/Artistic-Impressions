<?php get_header(); ?>
<?php $mainoptions = get_option('main_theme_options'); ?>
<div class="container">
	<div class="slider-wrapper theme-default">
		<div class="ribbon"></div>
			<div id="slider" class="slider-frame nivoSlider">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
				?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="info">
			<?php echo $mainoptions['info']; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>