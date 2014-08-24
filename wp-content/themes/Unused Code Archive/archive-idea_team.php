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

		<header class="page-header">
			<h1 class="page-title">Management Team</h1>

			<?php
					// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) :
				printf( '<div class="taxonomy-description">%s</div>', $term_description );
			endif;
			?>
		</header><!-- .page-header -->

		<div class="container">
			<div class="row">

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<div class="team-member">
			<figure class="cap-bot">
				<img src="http://placehold.it/200x200" class="thumbnail img-responsive">
				<figcaption>
					<div id="team-position"><?php the_field('position'); ?></div>
					<div id="team-year"><?php the_field('year'); ?></div>
					<div id="team-major"><?php the_field('major'); ?></div>
					<div> More on <b><?php the_title(); ?> --><br /></b></div>
				</figcaption>
			</figure>
		</div>


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
