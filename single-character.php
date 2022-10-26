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
            <div class="one-third"><?php the_post_thumbnail('charPortrait'); ?></div>
            <div><p><?php the_content(); ?></p></div>
          </div>
        </div>

        <?php
          $relatedPrograms= get_field('affiliation');

          if($relatedPrograms){
              echo '<hr class="section-break">';
              echo '<h2 class="headline headline--medium">Affiliation</h2>';
              echo '<ul class="link-list min-list">';
            foreach($relatedPrograms as $program) { ?>
              <li><a href="<?php the_permalink($program) ?>"><?php echo get_the_title($program) ?></a></li>
            <?php  }
              echo '</ul>';
          }
          wp_reset_postdata();
        ?>

        <?php
          $pastPrograms= get_field('past_affiliation');

          if($pastPrograms){
              echo '<hr class="section-break">';
              echo '<h2 class="headline headline--medium">Past Affiliation(s)</h2>';
              echo '<ul class="link-list min-list">';
            foreach($pastPrograms as $program) { ?>
              <li><a href="<?php the_permalink($program) ?>"><?php echo get_the_title($program) ?></a></li>
            <?php  }
              echo '</ul>';
          }
        ?>

    </div>
    

    
<?php
  }
get_footer();
?>