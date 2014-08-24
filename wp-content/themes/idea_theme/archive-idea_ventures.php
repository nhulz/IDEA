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

		<?php if ( have_posts() ) : ?>

		<div class="banner banner-holder about-banner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p>Over 60 ventures from 10 different industries have chosen to work with IDEA and our experience group of mentors and coaches.</p>
					</div>
				</div>
			</div>
		</div>

			<!-- Search Bar -->
			<div class="venture-search-bar row light-gray">
				<div class="container">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> <!-- Industry -->

					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> <!-- Stage -->

					</div>
					<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"> <!-- Button -->
						<button>FILTER</button> <!-- This refreshes the page? -->
					</div>
				</div>
			</div>
			<!-- /.Search Bar -->

		<!-- Main body of page -->
		<div class="container white">

			<div class="row">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'ventures' ); ?> <!-- See content-ventures.php -->

			<?php endwhile; ?>

		</div>
	</div>


	<?php scout_base_paging_nav(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</section><!-- #primary -->


<?php get_footer(); ?>

