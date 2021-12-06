<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class();?>>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary text-center">
  <div class="container-fluid text-center" style="margin-left: 200px;">
    <a class="navbar-brand" href="#"><?php bloginfo('name') ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNav">
    <?php 
    wp_nav_menu([
        'theme_location' => 'header',
        'container' => false,
        'menu_class' => 'navbar-nav'
        ])
         ?>
    <!--
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      -->
    </div>
  </div>
</nav>
</div>

<?= get_search_form() ?>


    
