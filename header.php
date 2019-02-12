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
        <div class="columns wrapHeaderContent">
          <div class="column is-one-third">
            <h2><?php bloginfo("name"); ?></h2>
          </div>
          <div class="column">
            <nav class="navMenu">
                <ul>
                  <li>Link1</li>
                  <li>Link2</li>
                </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
