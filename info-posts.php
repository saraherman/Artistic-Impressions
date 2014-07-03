<?php
/*
* Template Name: Post Info
* Description: A Page Template with an area for info and three posts at the bottom.
*/
?>

<?php include 'header.php'; ?>

<div class="container">

	<div class="content">
		<div class="full">
			
			<?php
				if (have_posts()): while (have_posts()): the_post();
					echo '<h1>';
					wp_title('');
					if(is_front_page() ) {

					echo "<h1>Home</h1>";

					} 
					 echo '</h1>';
				endwhile; endif;
			?>
			<?php
				if (have_posts()): while (have_posts()): the_post();
					
					the_content();
				endwhile; endif;
			?>

		</div>

	</div>


	<div class="content-index">

		<?php
				global $query_string;
				query_posts( $query_string . '&order=ASC' );
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */

					

					get_template_part( 'content', get_post_format() );
					if (is_page()) {
						$cat=get_cat_ID($post->post_title); //use page title to get a category ID
						$posts = get_posts ("cat=$cat&order=ASC");
						if ($posts) {
							foreach ($posts as $post):
							setup_postdata($post); ?>


						<div class="one-third">
							<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
							} ?>

							<!-- <a href="<?php  ?>"><h2><?php the_title(); ?></h2></a> -->
							<h2><?php the_content(); ?></h2>
						</div>

							
						<?php endforeach;
						}
					}
					
				endwhile;
				?>

	</div>


</div>

<?php include 'footer.php'; ?>