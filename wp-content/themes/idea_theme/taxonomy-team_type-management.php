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

		<!-- Page Title (Header) -->
		<div class="container">
			<header class="team-page-header page-header">
				<h1 class="page-title">Management Team</h1>
			</header>
		</div> <!-- .page-header -->

		<!-- Main body of page -->
		<div class="container white">
			<div class="row">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'team_mgmt' ); ?> <!-- See content-tem_mgmt.php -->

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
