<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>

 	<section>
 		<div class="container-fluid">
 			
 			<style type="text/css">
 				.rd_page-header {
 					margin-bottom: 0px;
 				}
 			</style>

      <?php include 'includes/rd_page-header.php'; ?>

    </div>

		<div class="container">
 		
  		<?php the_content() ?>
  
		</div>

  </section>

<?php endif; ?>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>


