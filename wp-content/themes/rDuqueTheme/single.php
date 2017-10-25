<?php
/*Template Name: Single */
?>

<?php get_header(); ?>

<body>
  
<div class="container-fluid">
  <div class="row">
    <section class="col-xs-12 col-md-8">
      
      <!-- Listado de posts -->
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();  ?>
          
          <article  itemscope itemtype="http://schema.org/Article">

            <div class="card">
              <img class="card-img-top" src="<?php the_post_thumbnail_url('post-thumbnail') ?>" alt="Card image cap">
              <div class="card-body">
                <h1 class="card-title"><?php the_title() ?></h1>
                <div class="card-text"><?php the_content() ?></div>
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


<?php get_footer(); ?>
