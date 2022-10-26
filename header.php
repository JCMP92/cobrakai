<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobra Kai Project</title>
  </head>
  <body>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url('/') ?>">Cobra Kai</a>
        </h1>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li <?php if(is_page('about-us') or wp_get_post_parent_id(0) == 2) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
              <li><a href="<?php echo site_url('/characters') ?>">Characters</a></li>
              <li><a href="<?php echo site_url('/dojos') ?>">Dojos</a></li>
              <li><a href="<?php echo site_url('/blog-news') ?>">News</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>