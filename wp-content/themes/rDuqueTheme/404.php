<?php
/**
 * Plantilla para mostrar página 404 (Error 404, no encontrado)
 *
 * @package rDuque.es
 * @subpackage rDuqueTheme
 * @since 2008
 */

get_header(); 
/*Template Name: 404 */

?>

  	<div class="container">


  	  <div class="row">	

  	  	<section class="col-xs-12 col-md-8">
          <h1>
            No encontramos la página que buscas
          </h1>

           <h2>
            <small>Puede que te interese alguno de nuestros</small><br>Artículos más populares
          </h2>

        
        
          <!-- Entradas populares, en realidad son wntradas relacionadas -->
          <?php
          $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'orderby'=>'rand', 'numberposts' => 2, 'post__not_in' => array($post->ID) ) );
           
            if( $related ) foreach( $related as $post ) {
            setup_postdata($post); ?>
             
             
                <article class="card">
                  <a  href="<?php the_permalink(); ?> " rel="bookmark" title="<?php the_title(); ?>">

                    <?php if ( has_post_thumbnail() ) { ?>
                      
                      <a href="<?php the_permalink(); ?>" title="Ir a <?php the_title() ?>">
                        <img class="card-img-top" src="<?php the_post_thumbnail_url('post-thumbnail') ?>" alt="Imagen de cabecera de <?php the_title() ?>"  itemprop="image" content="<?php the_post_thumbnail_url('post-thumbnail') ?>">
                      </a>

                    <?php
                      }else{
                    ?>

                    <img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" class="card-img-top" />
                    <?php } ?>
                  </a>        

                  

                  <div class="card-body">
                    <a href="<?php the_permalink(); ?>" title="Ir a <?php the_title() ?>">
                      <h1 itemprop="headline" content="<?php the_title() ?>"><?php the_title() ?></h1>
                    </a>
                    <p class="card-text"><?php the_excerpt() ?></p>
                  </div>

                <div class="card-footer">
                  <a href="<?php the_permalink(); ?>" class="btn btn-info float-right btn-sm" title="Ir a <?php the_title() ?>">Ver artículo completo</a>
                </div>
              </article>
                    
            <?php } wp_reset_postdata();  ?>
          
        </section> 

        <aside class="col-xs-12 col-md-4">
          <?php  get_sidebar()?>
        </aside>

      </div>

    </div>

<?php get_footer(); ?>