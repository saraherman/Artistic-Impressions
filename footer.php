<div class="container">
		<div class="footer">
			<div class="nav-menu">
				<?php wp_nav_menu( array( 
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'nav-menu'
      ) ); ?>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>