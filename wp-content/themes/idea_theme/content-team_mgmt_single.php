<?php
/**
 * The template part for displaying a single management member's profile page
 * @package Scout-Base
 */


/* 

TO DO LIST:

Styling:
	- Banner pattern background
	- Sidebar
		- Icons for links
		- Major & Year style
	- Ventures Worked with thumbnails
		- Title text for the venture
	- Recent News Article

Functions:
	- use WP_Query to display a recent post with either a custom field selector or specific tag


*/

$worked_ventures = get_field('worked_ventures');
$the_query = new WP_Query( $args );

?>

		<div class="title-banner" id="mgmt-banner"> 
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1 id="mgmt-name"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>

<div class="container white single-management-member">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"> <!--This is where the picture of the Member would go -->
			<div class="mgmt-sidebar">
			<img id="mgmt-img" src="http://placehold.it/400x400" class="thumbnail img-responsive">
			<div id="mgmt-position"><?php the_field('position'); ?></div>
			<h6>MAJOR</h6>
			<div id="mgmt-major"><?php the_field('major'); ?></div>
			<h6>YEAR</h6>
			<div id="mgmt-year"><?php the_field('year'); ?></div>
			<div id="mgmt-links">
				<ul>
					<li><a href="<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
					<li><a href="http://<?php the_field('linkedin'); ?>">LinkedIn</a></li>
					<li><a href="http://<?php the_field('personal_website'); ?>">Website</a></li>
				</ul>
			</div>
		</div>
	</div>

		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
			<div id="mgmt-desc-long" class="no-col-pad col-md-9"><?php the_content(); ?></div>
			<div id="mgmt-worked-ventures">
				<h2>Ventures Worked With</h2>
				<?php if( $worked_ventures ): ?>
				<?php foreach( $worked_ventures as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
					<div class="mgmt-worked-venture-thumbnail">
						<img id="venture-thumb" src="<?php the_field('venture_profile_pic'); ?>" class="thumbnail img-responsive">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</div>

	<section id="mgmt-recent-news-tag" class="mgmt-recent-news-tag">
		<div class="container white single-management-member">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<h2>Recent Articles Tagged "<?php the_title(); ?>"</h2>
					<div class="mgmt-article light-gray">
						<div id="blog-tag">Blog</div>

						<?php /* Returns related articles if they exist. In not, return nothing.*/ 
                    
          $p_loop = new WP_Query( array( 
              'post_type' => 'post',
              'showposts' => '-1',
              'meta_query' => array(
                      array (
                        'key' => 'related_team_member',
                        'value' => $post->ID,
                        'compare' => 'LIKE',
                    )),
          ));
                  
          if ( $p_loop->have_posts() ) : ?>
<?php while ( $p_loop->have_posts() ) : $p_loop->the_post();  ?>

<!--  -->
	<h1><?php the_title(); ?><h2>
	<h5><?php the_field('post_author'); ?></h5>
	<?php the_date(); ?>

 <?php endwhile;?>  
<?php endif; wp_reset_postdata(); ?>


					</div>
				</div>
			</div>
		</div>
	</section>
</div>

</div>
</div>



									<!-- <h2><?php the_title(); ?></h2> -->
						<!-- <div class="mgmt-article-author"><?php the_field('article_author'); ?></div> -->
						<!-- <div class="mgmt-article-desc"><?php the_field('article_summary'); ?></div> -->
						<!-- <div class="mgmt-article-tags"><!-- Generate tags from article </div>-->






