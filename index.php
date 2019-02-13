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





  </div>
</div>


<?php get_footer(); ?>
