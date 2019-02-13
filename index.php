<?php get_header(); ?>
<div class="wrapAll">
    <div class="owl-carousel owl-theme">
      <?php
      $the_query = new WP_Query( 'cat=3' );

      while ( $the_query->have_posts() ) :
      	$the_query->the_post(); ?>
        <div class="item">
          <div class="item-content">
            <h2 class="title-slider"><?php the_title(); ?></h2>
            <p class="text-slider"><?php the_excerpt(); ?></p>
          </div>
          <?php the_post_thumbnail('wt_big', array('class' =>'')); ?>

        </div>


      <?php  endwhile;
        // Ripristina Query & Post Data originali
        wp_reset_query();
        wp_reset_postdata();
        ?>
    </div>
    <main>
      <div class="container">
        <div class="wrapPost">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="post">
              <a href="#"><h3 class="title-article"><?php the_title(); ?></h3></a>
              <?php the_post_thumbnail('wt_quad', array('class' =>'img-responsive')); ?>
              <p class="text-article"><?php the_excerpt(); ?></p>
            </article>
          <?php endwhile; else: ?>
          <p>Spiacente, nessun articolo corrisponde ai criteri di ricerca.</p>
          <?php endif; ?>
        </div>
        <div class="sidebar">

        </div>
      </div>
    </main>





  </div>
</div>


<?php get_footer(); ?>
