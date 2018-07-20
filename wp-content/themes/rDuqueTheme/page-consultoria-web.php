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
									  <i class="material-icons md-48">explore</i>

									  <div class="media-body">
											<a href="http://rduque.com/contacto/" title="" class="nav-link">
									    	<h2>Solicitar asesoramiento web</h2>
											</a>
								    	<p class="ml-3">Elije esta opción si necesitas asesoramiento relacionado con tu proyecto, producto o servicio web</p>
									  </div>
									</div>
								</div>
								
								<div class="card-footer text-right">
								    	<a href="http://rduque.com/contacto/" title="Clic aquí para comenzar" class="btn btn-block btn-primary">Solicitar asesoramiento</a>
								</div>
							</div>

							<div class="card">	
								<div class="card-body">
									<div class="media">
									  <i class="material-icons md-48">code</i>

									  <div class="media-body">
											<a href="http://rduque.com/swiip/" title="" class="nav-link">
									    	<h2>Desarrollo web a medida</h2>
											</a>
								    	<p class="ml-3">Elije esta opción si necesitas implementar una funcionalidad concreta en tu web o web app</p>
									  </div>
									</div>
								</div>
								
								<div class="card-footer text-right">
								    	<a href="http://rduque.com/swiip/" title="Clic aquí para comenzar" class="btn btn-block btn-primary">Enviar mis requisitos</a>
								</div>
							</div>

							<div class="card">	
								<div class="card-body">
									<div class="media">
									  <i class="material-icons md-48">web</i>

									  <div class="media-body">
											<a href="http://rduque.com/crear-blog-web-empresa" title="Empezar a crear mi web de empresa o blog" class="nav-link">
									    	<h2>Web de empresa o blog</h2>
											</a>
									    <p class="ml-3">Elije esta opción si deseas un blog o una web para mostrar tus servicios pero no deseas vender desde ella</p>
									  </div>
									</div>
								</div>

								<div class="card-footer text-right">
							    <a href="http://rduque.com/crear-blog-web-empresa/" title="Clic aquí para enviarnos un pliego con tus requisitos" class="btn btn-block btn-primary">Enviar mis requisitos</a>
								</div>
							</div>

				
							<div class="card">	
								<div class="card-body">
									<div class="media">
									  <i class="material-icons md-48">shopping_cart</i>

									  <div class="media-body">
											<a href="http://rduque.com/crear-una-tienda-online/" title="Empezar a crear mi tienda online" class="nav-link">
									    	<h2>Tienda online</h2>
											</a>
									    <p class="ml-3">Selecciona esta opción si deseas vender productos o servicios desde tu web</p>
									  </div>
									</div>
								</div>

								<div class="card-footer text-right">
							    <a href="http://rduque.com/crear-una-tienda-online/" title="Empezar a crear mi tienda online" class="btn btn-block btn-primary">Enviar mis requisitos</a>
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