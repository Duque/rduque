<nav>
	<?php 
		wp_nav_menu( array( 
			'theme_location' => 'aside',
			'menu_class' => 'aside-menu'
		) ); 
	?>

	<?php dynamic_sidebar('sidebar'); ?>
</nav>