<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

    <!-- puxando os estilos -->
    <?php wp_head(); ?>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
        <?php 
        if (has_custom_logo()) {
          the_custom_logo();
        }else{
          ?>
          <h1><a href="<?php echo home_url('/'); ?>" class="navbar-brand"><?php bloginfo('name'); ?></a></h1>
          <?php
        }
        ?>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>

        <?php 
        if (has_nav_menu('primary')) {
          wp_nav_menu(array(
            // Nome do theme declarado no setup.php
            'theme_location' => 'primary',
            // Caso não haja menu ele não ostra menu nenhum
            'fallback_cb' => false,
            // Criando <div class="collapse navbar-collapse" id="navbarResponsive">
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarResponsive',
            'menu_class' => 'navbar-nav ml-auto'
          ));
        }
        ?>

        <!-- Inicio menu
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>-->
      </div>
    </nav>