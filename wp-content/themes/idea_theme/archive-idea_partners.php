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

		<div class="banner banner-holder partner-banner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p>In order to help our ventures grow in and outside of the Northeastern Community
							we have established relationships with student organizations, companies, and programs.
							Through this network, we share resources and expertise to better serve our ventures
							and strengthen the entrepreneurship ecosystem as a whole.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Main body of page -->
		<div class="container white">

			<div class="row">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'partners' ); ?> <!-- See content-ventures.php -->

			<?php endwhile; ?>

		</div>
	</div>


	<?php scout_base_paging_nav(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

