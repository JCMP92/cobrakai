<?php 
  get_header();
?>
  <div class="page-banner">
      <div
        class="page-banner__bg-image"
      ></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Blog & News</h1>
      </div>
  </div>

  <div class="container container--narrow page-section">
    <?php 
      while(have_posts()){
        the_post();
    ?>
      <div class="post-item">
        <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="metabox">
          <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
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