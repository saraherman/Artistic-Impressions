<?php
/*
Template Name: Slider Page
*/
?>

<?php get_header(); ?>


	<div class="container">
		
		<div class="slider-wrapper theme-default">
    		<div class="ribbon"></div>
				

			<div id="slider" class="slider-frame nivoSlider">
				


						
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
							$args = array( 'post_mime_type' => 'image', 'category' => '$cat', 'posts_per_page' => '100' );
							$posts = get_posts($args);
							if ($posts) {
								foreach ($posts as $post):
								setup_postdata($post); 
								echo wp_get_attachment_image( $post->ID, 'full' );

							
								?>
								
								<p><?php the_content(); ?></p>
							

								
				<?php endforeach;
							}
						}
						
					endwhile;
				?>
							
						

					<?php
						while ( have_posts() ) : the_post();



						$cat=get_cat_ID($post->post_title); //use page title to get a category ID
						$args = array( 'post_type' => 'attachment', 'post_mime_type' => 'image', 'category' => '$cat' );
						$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
						$attachments = get_posts($args);
					    if ($attachments) {
					            foreach ( $attachments as $attachment ) {
					                    
					                    // Method #2: Would always return the "attached-image" size
					                    echo "<img src='";
					                    echo $attachment->guid;
					                    echo "' alt ='".$alt."'/>";
					            }
					    }

					?>
					<?php 			
						endwhile;
					?>
				 <!-- this grabs all images in the folder slider and adds it to the slider -->
				<?php
					// $imgdir = $upload_dir = wp_upload_dir().'/slider'; //Pick your folder
					// $allowed_types = array('png','jpg','jpeg','gif'); //Allowed types of files
					// $dimg = opendir($imgdir);//Open directory
					// while($imgfile = readdir($dimg))
					// {
					//   if( in_array(strtolower(substr($imgfile,-3)),$allowed_types) OR
					// 	  in_array(strtolower(substr($imgfile,-4)),$allowed_types) )
					// /*If the file is an image add it to the array*/
					//   {$a_img[] = $imgfile;}
					// }
					 
					// $totimg = count($a_img);  //The total count of all the images
					// //Echo out the images and their paths incased in an li.
					//  for($x=0; $x < $totimg; $x++){echo "<img src='" . $imgdir . $a_img[$x] . "' width='960px' height='624px' />";}
					
				?>
			</div>

    			
			<div class="info">
				<?php
				if (have_posts()): while (have_posts()): the_post();
					
					the_content();
				endwhile; endif;
			?>
				


		
		</div>
	</div>
<?php get_footer(); ?>