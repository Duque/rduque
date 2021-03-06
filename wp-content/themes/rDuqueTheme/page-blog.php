<?php get_header(); ?>

  
<div class="container">
  <div class="row">
    <section class="col-xs-12 col-md-8">
      
      <!-- Listado de posts -->
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();  ?>
          
          <article>

            <div class="card">
              <a href="<?php the_permalink(); ?>" title="Ir a <?php the_title() ?>">
                <img class="card-img-top" src="<?php the_post_thumbnail_url('post-thumbnail') ?>" alt="Imagen de cabecera de <?php the_title() ?>"  content="<?php the_post_thumbnail_url('post-thumbnail') ?>">
              </a>
              <div class="card-body">
                <a href="<?php the_permalink(); ?>" title="Ir a <?php the_title() ?>">
                  <h1 class="card-title"><?php the_title() ?></h1>
                </a>
                <p class="card-text"><?php the_excerpt() ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-info float-right btn-sm" title="Ir a <?php the_title() ?>">Ver artículo completo</a>
              </div>

              <div class="card-footer">
                
                <p>Escrito por <?php the_author(); ?> el <time><?php the_time('j/m/Y') ?></time>  Categorías: <?php the_category(', '); ?></p> 

                  <?php include 'includes/etiquetas.php'; ?>
              </div>

              
            </div>

          </article>

        <?php endwhile; ?>

          <!-- Pagination -->
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li>
                <span aria-hidden="true">
                  <?php next_posts_link('« Ver anteriores'); ?><< Ver entradas antiguas
                </span>
              </li>
              <li>
                <span aria-hidden="true">
                  <?php previous_posts_link('Ver posteriores'); ?> Ver nuevas entradas >>
                </span>
              </li>
            </ul>

            <?php paginate_links() ?>

            
        <?php else: ?>
          <p>Vaya, no hay entradas.</p>
        <?php endif; ?>


    </section>
    <aside class="col-xs-12 col-md-4">
      <!-- Archivo de barra lateral por defecto -->
      <?php get_sidebar(); ?>
    </aside>
  </div>
 

</div>


<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
