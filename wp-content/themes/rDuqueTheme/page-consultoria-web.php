<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>

		 	
		 	<article>
		 		<div class="container-fluid">

		 			<?php include 'includes/rd_page-header.php'; ?>

		 		</div>
		 		
				<div class="container">		
							
					<?php
						// List of web services on stacked cards 
						include 'includes/web-services.php'; 
					?>
		  
				</div>

		  </article>
			



<?php endif; ?>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>