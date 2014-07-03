
<?php
/*
* Template Name: Contact
* Description: A Page Template with a content area, contact form, and google map.
*/
?>
<?php get_header(); ?>
	
	
	<div class="container">
		<div class="content">
			<div class="full">
				<?php
					if (have_posts()): while (have_posts()): the_post();
						echo '<h1 class="uppercase">';
						wp_title('');
						 echo '</h1>';
					endwhile; endif;
				?>
				<?php
					if (have_posts()): while (have_posts()): the_post();
						
						the_content();
					endwhile; endif;
				?>
				<!-- emsend.php is email.php, but renamed to prevent bots from scanning it and sending spam-->
				<form action="<?php bloginfo('stylesheet_url'); ?>/emsend.php" method="post">
					<div>
						<input name="name" type="text" placeholder="Name" required>
						<input name="email" type="email" placeholder="Email" required>
						<input name="subject" class="caps" type="text" placeholder="Subject" required>
					</div>
					<textarea name="comments2" placeholder="Messages"></textarea>
					<input name="submit" type="submit" value="send">
				</form>

			</div>
				<?php 
					if(isset($_GET['confirm'])){
						if ($_GET['confirm']) {
							echo "<p class='confirm'>Thank you for contacting us. We will contact you as soon as we can.</p>";
						}
					}
				?>
			<div class="info">
				<p>Please bring information (contractor's plans, measurements, and pictures of the area you're remodeling) to better assist us in designing your dream remodel or new home.</p>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3346.657052347165!2d-117.07250230000001!3d32.986448700000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dbf0a9ee650a71%3A0x15c3917d24b707df!2s12225+World+Trade+Dr!5e0!3m2!1sen!2sus!4v1403813450446" width="100%" height="426" frameborder="0" style="border:0"></iframe>
			
		</div>
	</div>
	<?php get_footer(); ?>