<?php get_header(); ?>
<?php $mainoptions = get_option('main_theme_options'); ?>
<div class="container">
	<div class="content">
		<div class="full">
			<div class="gallery services">
				<h1 class="uppercase">Options</h1>
				<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'options',
					'order' => 'asc',
					'paged' => $paged,
					'posts_per_page' => 12
					);
					?>
					<?php $query = new WP_Query($args);
					while ($query->have_posts()) : $query->the_post();
					?>
					<div class="one-third">
						<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} 
						?>
						<h2 class="caps"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					</div>
				<?php endwhile; ?>
				<div class="pagination">
					<?php
					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $query->max_num_pages
						) );
						?>
					</div>
				</div>
			</div>
		</div>
		<?php get_footer(); ?>