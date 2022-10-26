<?php 
get_header();
?>
    <div class="page-banner">
      <div
        class="page-banner__bg-image"
      ></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Dojos</h1>
        <div class="page-banner__intro">
          <?php the_archive_description();?>
        </div>
      </div>
    </div>
     <div class="container container--narrow page-section">
    <?php 
      while(have_posts()){
        the_post();
    ?>
      <div class="post-item">
        <div class="container-title-img">
          <img class="professor-card image" src="<?php the_post_thumbnail_url('dojoSquare');?>">
          <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <div class="generic-content">
          <?php the_excerpt(); ?>
          <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue &raquo;</a></p>
        </div>
      </div>
    <?php    
      }
      echo paginate_links();
    ?>
  </div>  
<?php
get_footer();
?>