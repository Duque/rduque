<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>

 	<section>
		
		<?php 
		// Header Home
			include 'includes/header-home.php';
		?>

		<article>
			<p class="section display-4 mb-5">¿A qué me dedico?<br><small>Las tecnologías que domino</small></p>

			<?php
				include 'includes/tecnologies.php';
			?>

		</article>


			<p class="section display-4 mb-5">¿Qué puedo hacer por ti? <br><small>Creo tu sitio web, tu plataforma en Internet</small></p>	

			<?php 
				// Servicios a 3 columnas
				include 'includes/rd_bg-servicios.php';
			?>		

			<div class="rd_bg-fluid rd_bg-blue-gray-700 shadow">
				<div class="container text-center pt-5 pb-5">
					<div class="row">
						<div class="col-md-6 h3 white text-right pt-2 text-shadow">Estoy aquí para ayudarte</div>
						<div class="col-md-6 text-left">
							<a class="btn btn-lg btn-primary shadow" href="http://rduque.com/contacto/"><span class="h3 white">¡Cuéntame tu idea!</span></a>
						</div>
					</div>
				</div>
			</div>
	  	
	  	<?php the_content() ?>
	
  </section>

<?php endif; ?>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>


