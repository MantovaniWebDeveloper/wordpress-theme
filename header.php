<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <title><?php bloginfo("title"); ?></title>
    <meta name="description" content="<?php bloginfo("description"); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="container">
        <div class="columns wrapHeaderContent is-desktop">
          <div class="column is-one-third">
            <h2><?php bloginfo("name"); ?></h2>
          </div>
          <div class="column">
            <nav class="navMenu">
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'topMenuHeader',
                    'container' => false,
                    'menu_class' => 'wt_nav_item'
                  ));
                 ?>
            </nav>
          </div>
        </div>
      </div>
    </header>
