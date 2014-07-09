<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<?php $mainoptions = get_option('main_theme_options'); ?>
<div class="container">
	<div class="content">
		<div class="full">
			<div class="gallery services single">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1 class="uppercase"><?php the_title(); ?></h1>
				<ul>
					<h2>ARTISTIC IMPRESSIONS</h2>
					<li><a href="mailto:<?php echo $mainoptions['email,']; ?>"><?php echo $mainoptions['email']; ?></a></li>
					<li><?php echo $mainoptions['address']; ?></li>
					<li><?php echo $mainoptions['phone']; ?></li>
					<li><?php echo $mainoptions['fax']; ?></li>
					<li><?php echo $mainoptions['hrs']; ?></li>
				</ul>
				<form action="<?php echo get_template_directory_uri(); ?>/mailer.php" method="post">
					<div>
						<input name="name" type="text" placeholder="Name" required="">
						<input name="email" type="email" placeholder="Email" required="">
						<input name="subject" class="caps" type="text" placeholder="Subject" required="">
						<input type="hidden" value="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" name="currentURL">
					</div>
					<textarea name="message" placeholder="Messages"></textarea>
					<input name="submit" type="submit" value="send">
				</form>
				<div class="ft-img">
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
					?>
				</div>
				<div class="info">
					<?php echo $mainoptions['info']; ?>
					<?php the_content(); ?>
				</div>
				<?php echo $mainoptions['map']; ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
</div>
</div>
</div>
<?php get_footer(); ?>