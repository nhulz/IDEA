<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: About Idea
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Scout-Base
 */


/*

TO DO LIST:

Styling:
	- Banner picture background
	- Learn more and Get involved buttons
	- Any other final changes at designer's discretion

Functions:


Almost done! Yay!

*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section id="about-banner" class="tag-banner">
			<div class="container banner-text-container">
				<div class="row">
					<div id="text-container-bg"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<h1>About IDEA</h1>
						<p>Short statement that sums up IDEA as a whole. Short statement that sums up IDEA as a whole. Short statement that sums up IDEA as a whole. </p>
					</div>
				</div>
			</div>

		</section>

		<section id="our-mission">
			<div class="container about-idea-page">
				<div class="row block-margin">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
						<h2>OUR MISSION<h2>
							<p>This is where a brief statement about IDEA’s mission would go. This is where a brief statement about IDEA’s mission would go. This is where a brief statement about IDEA’s mission would go. This is where a brief statement about IDEA’s mission would go. This is where a brief statement about IDEA’s mission would go. This is where a brief statement about IDEA’s mission would go.  </p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/photos/about-mission.jpg" class="img-responsive" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="our-history" class="light-blue">
			<div class="container about-idea-page">
				<div class="row block-margin" style="padding: 20px;">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-md-push-5 col-lg-push-5">
						<h2>OUR HISTORY<h2>
							<p style="color:#231F20">This is where a brief summary of IDEA’s history would go. This is where a brief summary of IDEA’s history would go. This is where a brief summary of IDEA’s history would go. This is where a brief summary of IDEA’s history would go. This is where a brief summary of IDEA’s history would go. This is where a brief summary of IDEA’s history would go.  </p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-pull-7 col-lg-pull-7">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/photos/about-history.jpg" class="img-responsive" />
						</div>
					</div>
				</div>
			</section>	

			<section id="our-promise">
				<div class="container about-idea-page">
					<div class="row block-margin">
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
							<h2>OUR PROMISE<h2>
								<p>This is where a brief summary of how IDEA’s mission and history (experience) create success. This is where a brief summary of how IDEA’s mission and history (experience) create success. This is where a brief summary of how IDEA’s mission and history (experience) create success. This is where a brief summary of how IDEA’s mission and history (experience) create success.</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
								<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/photos/about-promise.jpg" class="img-responsive" />
							</div>
						</div>
					</div>
				</section>


			<section id="about-cta" class="about-cta light-orange">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<h2>GET INVOLVED</h2>
						<p>Here’s where you sell them on getting involved with IDEA. Here’s where you sell them on getting involved with IDEA. </p>
						<a href="/idea/get-involved"><button class="btn btn-lg white-btn" type="button">GET INVOLVED NOW</button></a>
						</div>
						<div class="col-md-2 col-lg-2">&nbsp;</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<h2>LEARN MORE</h2>
						<p>Here’s where you sell them on venture resources. Here’s where you sell them on venture resources.  </p>
						<a href="/idea/resources"><button class="btn btn-lg white-btn" type="button">VENTURE RESOURCES</button></a>							
						</div>						
				</div>
			</section>			
			</main><!-- #main -->
		</div><!-- #primary -->


		<?php get_footer(); ?>
