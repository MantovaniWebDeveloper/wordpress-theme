<?php get_header(); ?>
<div class="wrapAll">
  <div class="container">
    <div class="owl-carousel">
      <?php
      $the_query = new WP_Query( 'cat=3' );

      while ( $the_query->have_posts() ) :
      	$the_query->the_post(); ?>
        <div class="item">
          <h2><?php the_title(); ?></h2>
          <?php the_post_thumbnail('wt_big'); ?>
        </div>


      <?php  endwhile;
        // Ripristina Query & Post Data originali
        wp_reset_query();
        wp_reset_postdata();
        ?>
    </div>

</div>




  </div>
</div>


<?php get_footer(); ?>
