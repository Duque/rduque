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


							<div class="card">	
								<div class="card-body">
									<div class="media">
									  <i class="material-icons md-48">fingerprint</i>

									  <div class="media-body">
											<a href="http://rduque.com/branding/" title="Empezar a dar forma a mi imagen" class="nav-link">
									    	<h2>Branding</h2>
											</a>
								    	<p class="ml-3">Obten una imagen coherente y única con tu negocio</p>
									  </div>
									</div>
								</div>
								
								<div class="card-footer text-right">
								    	<a href="http://rduque.com/branding/" title="Clic aquí para comenzar" class="btn btn-block btn-primary">Enviar requisitos</a>
								</div>
							</div>

							<div class="card">	
								<div class="card-body">
									<div class="media">
									  <i class="material-icons md-48">card_giftcard</i>

									  <div class="media-body">
											<a href="http://rduque.com/packaging/" title="Empezar a crear la imagen de mi producto" class="nav-link">
									    	<h2>Packagin</h2>
											</a>
									    <p class="ml-3">Definamos una presentación coherente y efectiva de tu producto</p>
									  </div>
									</div>
								</div>

								<div class="card-footer text-right">
							    <a href="http://rduque.com/packaging/" title="Clic aquí para comenzar" class="btn btn-block btn-primary">Enviar mis requisitos</a>
								</div>
							</div>
							
							

							

				
							

		  				<?php the_content() ?>
						
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