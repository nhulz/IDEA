<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */

get_header(); ?>

  <section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <section class="banner text-banner" id="news-banner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>Drink up blog posts and news articles written by our very own IDEA management
              team members, and press articles about IDEA or our ventures</p>
          </div>
        </div>
      </div>
    </section>

  <section id="featured-post" class="featured-post">
        <div class="container">
                    <?php
                /* Loops through to find the featured post */
                $paged = get_query_var('paged');
                if ($paged < 2) :
                $featured_post = get_field('featured_post','options');
                if( $featured_post ): ?>
                    <?php foreach( $featured_post as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>


      <div class="row">
        <div id="featured-title" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <!-- The "FEATURED NEWS" Header goes here -->
        <h3>FEATURED NEWS</h3>
        </div>
        <div id="featured-title" class="featured-title col-xs-12 col-sm-12 col-md-12 col-lg-12"> <!-- The title of the featured post goes here -->
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h1>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <!-- The date and author goes here -->
        <h5><?php the_field('post_author');?> / <?php the_date();?></h5>
        </div>
      </div> <!-- ./ Featured-title row -->

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 featured-content">
        <div id="blog-tag">BLOG</div>
        <p>
        <?php $content = get_the_content();
        echo substr($content, 0, 500); ?>...
        </p>
        <a id="read-more" href="<?php the_permalink(); ?>"><b>Read More</b></a>
      <p id="featured-tags"><?php the_tags(); ?></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 featured-img"><img src="http://placehold.it/400x350"></div>

    </div>
  </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; endif;?>
  </section> <!-- ./ Featured Post -->

  <section id="news-posts" class="news-posts">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <?php include('searchform.php'); ?>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
   
      <?php if ( have_posts() ) : ?>
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          /* Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'content', 'post' );
        ?>

      <?php endwhile; ?>

      <?php // scout_base_paging_nav(); ?>
      <?php wp_pagenavi() ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>


        </div> <!-- ./ Column containing all the posts -->
  <section>  <!-- ./ News Post Section -->

    </main><!-- #main -->
  </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
