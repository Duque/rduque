<?php get_header(); ?>

<body>
  
<div class="container-fluid">
  <div class="row">
    <section class="col-xs-12 col-sm-8">
      
      <!-- Listado de posts -->
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();  ?>
          
          <article  itemscope itemtype="http://schema.org/Article">

            <div class="card">
              <a href="<?php the_permalink(); ?>" title="Ir a <?php the_title() ?>">
                <img class="card-img-top" src="<?php the_post_thumbnail_url('post-thumbnail') ?>" alt="Imagen de cabecera de <?php the_title() ?>">
              </a>
              <div class="card-body">
                <a href="<?php the_permalink(); ?>" title="Ir a <?php the_title() ?>">
                  <h1><?php the_title() ?></h1>
                </a>
                <p class="card-text"><?php the_excerpt() ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary float-right btn-sm" title="Ir a <?php the_title() ?>">Ver artículo completo</a>
              </div>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <small> Autor: 
                  <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php the_author_posts_link() ?> </span></span> el <span itemprop="datePublished" content="2016-08-12"><?php the_time('j/m/Y') ?></span> en categorías: <?php the_category(', '); ?> </small>  
                </li>
                <li class="list-group-item">
                  <?php include 'includes/etiquetas.php'; ?>
                </li>
              </ul>
            </div>

          </article>

        <?php endwhile; ?>

          <!-- Paginación -->
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li>
                <span aria-hidden="true">
                  <?php next_posts_link('« Ver anteriores'); ?>
                </span>
              </li>
              <li>
                <span aria-hidden="true">
                  <?php previous_posts_link('Ver posteriores'); ?> >>
                </span>
              </li>
            </ul>

            <?php paginate_links() ?>

            
        <?php else: ?>
          <p>Vaya, no hay entradas.</p>
        <?php endif; ?>


    </section>
    <aside class="col-xs-12 col-sm-4">
      <!-- Archivo de barra lateral por defecto -->
      <?php get_sidebar(); ?>
    </aside>
  </div>
 

</div>


<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
