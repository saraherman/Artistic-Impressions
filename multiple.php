<?php
/*
Template Name: Multiple Posts
*/
?>
<?php include 'header.php'; ?>


	<div class="container">
		<div class="content">
			<div class="gallery services">
				<h1 class="uppercase"><?php wp_title( '', true, 'right' ); ?></h1>
				
				
				<?php
				$query = new WP_Query( 'nopaging=true' );
				global $query_string;
				query_posts( $query_string . '&nopaging=true');
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

							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>

							
						<?php endforeach;
						}
					}
					
				endwhile;
				?>
				
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>