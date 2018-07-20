<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>

 	<section>

		<?php 
			// Servicios a 3 columnas
			//include 'includes/rd_servicios-3D.php';
		?>		
		<?php 
			// Servicios a 3 columnas
			//include 'includes/css-galaxy.php';
		?>	
 		
		<div class="container">

			<?php 
			// Servicios a 3 columnas
			include 'includes/rd_swiip-servicios-3-col.php';
			?>			

  		<?php the_content() ?>
  
		</div>

		<?php 
			// Servicios a 3 columnas
			include 'includes/rd_bg-servicios.php';
		?>		

  </section>

<?php endif; ?>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>


