<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>

		 	
		 	<article>
		 		<div class="container-fluid">

		 			<?php include 'includes/rd_page-header.php'; ?>

		 		</div>
		 		
				<div class="container">		
				<div class="row">
					<div class="col-xs-12- col-md-8">


				  		<?php the_content() ?>
				    
				      <hr>
				  
						</div>

						<div class="col-xs-12- col-md-4">
							
							<nav>
								<?php 
									wp_nav_menu( array( 
										'theme_location' => 'services',
										'menu_class' => 'aside-menu'
									) ); 
								?>
							</nav>

						</div>

					</div>
				</div>
		  </article>
			



<?php endif; ?>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>