<?php get_header(); ?>
<?php $mainoptions = get_option('main_theme_options'); ?>
<div class="container">
	<div class="content">
		<div class="full">
			<div class="gallery services single">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1 class="uppercase"><?php the_title(); ?></h1>
				<div class="ft-img">
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
					?>
				</div>
				<div class="gallery-imgs">
					<ul>
						<?php autoc_get_img('galleryphotos'); ?>
					</ul>
				</div>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
</div>
</div>
</div>
<?php get_footer(); ?>