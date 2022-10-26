<?php get_header(); ?>
    <div class="page-banner">
      <div class="page-banner__bg-image"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title();?></h1>
      </div>
    </div>
  <?php 
    $parentID=wp_get_post_parent_id(get_the_ID());

    if($parentID){ ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($parentID) ?>">
            <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parentID) ?>
          </a>
          <span class="metabox__main">Our History</span>
        </p>
      </div>
  <?php    
    }
  ?>
    <div class="container container--narrow page-section">
      
      <?php 
        $pageHasChild = get_pages(array(
          'child_of' => get_the_ID(),
        )); //This will show a value of true if the page has a child or childs, if not, will be null (null couls be interpreted as a false boolean value)

        if($pageHasChild or $parentID) { ?>
          <div class="page-links">
            <h2 class="page-links__title"><a href="<?php echo get_permalink($parentID) ?>"><?php echo get_the_title($parentID) ?></a></h2>
            <ul class="min-list">
      <?php
        if($parentID) {
          $findChildOf = $parentID;
        } else {
          $findChildOf = get_the_ID();
        }
          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildOf,
            'sort_column' => 'menu_order'
          ));
      ?>
        </ul>
      </div>
      <?php } ?>

      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>
<?php
get_footer();
?>