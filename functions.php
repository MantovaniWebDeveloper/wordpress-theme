<?php

  /*CONFIGURAZIONI BASE DEL TEMA*/
  if(! function_exists()) {

    function wt_setup_theme(){
      //attivo il supporto dei titoli
      add_theme_support("title-tag");
      //attivo il supporto per le imagini in articoli e pagine
      add_theme_support( 'post-thumbnails' );
      //dimensioni per le imagini in articoli e pagine
      add_image_size('wt_big',1400,600,true);
      add_image_size('wt_quad',600,600,true);
      add_image_size('wt_single',800,500,true);


      //attivazione custom menu
      register_nav_menus(array(
        'header' => 'topMenuHeader',
      ));


    }

}
  add_action('after_setup_theme', 'wt_setup_theme');
  //***************************************************/

  /*INCLUSIONE STILI*/
  if(! function_exists()) {

    function wt_style(){
      wp_enqueue_style('bulma-css', get_template_directory_uri().'/css/style.css');
    }
}

  add_action('wp_enqueue_scripts', 'wt_style');


 ?>
