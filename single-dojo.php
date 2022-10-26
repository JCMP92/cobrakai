<?php get_header(); 
  while(have_posts()){
    the_post();
    ?>
    <div class="page-banner">
      <div
        class="page-banner__bg-image"
      ></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title();?></h1>
      </div>
    </div>
    <div class="container container--narrow page-section">
        <div class="generic-content">
          <div class="row group">
            <div class="one-third"><?php the_post_thumbnail('dojoBigSquare'); ?></div>
            <div><p><?php the_content(); ?></p></div>
          </div>
        </div>
    </div>
<?php
  }
get_footer();
?>