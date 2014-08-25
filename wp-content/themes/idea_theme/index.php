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

    <section class="banner text-banner news-banner" id="news-banner">
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
   <?php get_template_part( 'content', 'featured_post' ); ?> 
  </section> <!-- ./ Featured Post -->

  <section id="news-posts" class="news-posts">
    <div class="container">
      <div class="row">
        <div id="news-sidebar" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"> <!-- The Sidebar with Category, tags, and search -->
          <hr/>
          <div id="news-categories">
            <h5>CATEGORY</h5>
            <ul>
              <li><a href="/idea/category/blog/">BLOG</a></li>
              <li><a href="/idea/category/press/">PRESS</a></li>
              <li><a href="/idea/category/news/">NEWS</a></li>
            </ul>
          </div>

          <div id="news-tags">
            <h5>COMMON TAGS</h5>
            <ul>
              <li><a href="idea/category/blog/">Friday 5</a></li>
              <li><a href="idea/category/press/">Ventures</a></li>
              <li><a href="idea/category/news/">Management Team</a></li>
            </ul>
          </div>

          <div id="news-search">
            <h5>SEARCH</h5>
          <?php include('searchform.php'); ?>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
      <?php if ( have_posts() ) : ?>
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'post' );?>
      <?php endwhile; ?>

      <?php // scout_base_paging_nav(); ?>
      <?php wp_pagenavi() ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>
        </div>
      </div>
    </div> <!-- ./ Column containing all the posts -->
  </section>  <!-- ./ News Post Section -->

    </main><!-- #main -->
  </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
