<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>

 	<article>

		<div class="container">		

  		<?php the_content() ?>

		</div>

  </article>

<?php endif; ?>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>