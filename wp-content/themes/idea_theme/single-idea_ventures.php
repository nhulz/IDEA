<?php
/**
* The template for displaying all single posts.
*
* @package Scout-Base
*/

/*

TO DO LIST:

Styling:
	- Banner BG pattern 
	- Styling for Recent News
	- Typography
	- Any additional styling to images


Functions:
	- use WP_Query to display a recent news post with either a custom field selector or specific tag
*/


$image = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$post_objects = get_field('veture_tag');

if( $image ) {
	echo wp_get_attachment_image( $image, $size );
}

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="venture-banner banner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>


			<div class="container white venture-single">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"> <!--This is where the picture of the Member would go -->
						<img id="venture-profile" src="<?php the_field('venture_profile_pic'); ?>" alt="<?php the_field('venture_profile_pic'); ?>"/>
						<div class="venture-sidebar">

							<a href="<?php the_field('venture_url'); ?>"><?php the_field('venture_url'); ?></a> <!-- The venture's website url -->
							<div id="venture-team"> <!-- This displays the Venture's team members -->
								<h6>TEAM</h6>
								<p><?php the_field('venture_team_members'); ?></p>
							</div>
							<div id="venture-recent-news">
								<h6>RECENT NEWS</h6>
								<!-- This part needs to display all the news posts that tag this venture. We can either
								figure out how to do it with if statements, or try just manually selecting all the news
								posts from the venture panel side. However this may be confusing when a ton of posts
								are added over time.. -->

							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9"> <!-- This is where the main desc. of the venture appears -->
						<p><?php the_content(); ?></p>
						<div class="venture-pics">
							<img src="<?php the_field('venture_pic-1'); ?>" alt="<?php the_field('pic_desc-1'); ?>"/> <!-- The first venture picture -->
							<p><?php the_field('pic_desc-1'); ?></p>
							<img src="<?php the_field('venture_pic-2'); ?>" alt="<?php the_field('pic_desc-2'); ?>"/> <!-- The second venture picture -->
							<p><?php the_field('pic_desc-2'); ?></p>

						</div>
					</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php endwhile; // end of the loop. ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>