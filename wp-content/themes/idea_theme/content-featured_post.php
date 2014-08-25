<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>
 <?php
                /* Loops through to find the featured post */
                $paged = get_query_var('paged');
                if ($paged < 2) :
                $featured_post = get_field('featured_post','options');
                if( $featured_post ): ?>
                    <?php foreach( $featured_post as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
    <div class="featured-bg-img" id="featured-bg-img">
    <img id="featured-bg-img" src="<?php the_field('featured_bg_img'); ?>" class="img-responsive">

  </div>
        <div class="container">


      <div class="row">
        <div id="featured-title" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <!-- The "FEATURED NEWS" Header goes here -->
        <h3>FEATURED NEWS</h3>
        </div>
        <div id="featured-title" class="featured-title col-xs-12 col-sm-12 col-md-12 col-lg-12"> <!-- The title of the featured post goes here -->
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h1>
        </div>
        <div id="featured-title" class="featured-title col-xs-12 col-sm-12 col-md-12 col-lg-12"> <!-- The date and author goes here -->
        <h5><?php the_field('post_author');?> / <?php the_date();?></h5>
        </div>
      </div> <!-- ./ Featured-title row -->

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 featured-content">
        <div id="blog-tag"><?php  // Pulls the first category selected
                            $category = get_the_category(); 
                            echo $category[0]->cat_name;?>
        </div>
        <p>
        <?php $content = get_the_content();
        echo substr($content, 0, 500); ?>
        ...
        </p>
        <a id="read-more" href="<?php the_permalink(); ?>"><b>Read More</b></a>
      <p id="featured-tags"><?php the_tags(); ?></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 featured-img"><img src="<?php the_field('blog_post_image'); ?>"></div>
    </div>
  </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; endif;?>


