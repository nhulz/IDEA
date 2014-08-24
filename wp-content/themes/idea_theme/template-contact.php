<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Contact Us
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
	- Banner
		- pattern background
		- Banner needs to be the right height on mobile
	- Submit Message button
	- Form Inputs
	- Executive info circles
			- Figure out how to get these to center in their columns in mobile
		- Executive info header
		- Executive info info text
	- Address Section
		- Address info
		- Google embed

Functions:
	- connect input forms
	- connect email to 'submit message' button


*/

	get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="title-banner" id="contact-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p>Statement or short paragraph about why the user should get in touch with IDEA.</p>
						</div>
					</div>
				</div>
			</div>


			<section id="contact-form" class="contact-form">
				<div class="container contact-page">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<input></input>
							<input></input>
							<input></input>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<input cl></input>
							<button class="btn btn-lg contact-button" type="button">SIGN UP NOW</button>

						</div>

					</div>
				</div>
			</section>

			<section class="contact-executives">
				<div class="container contact-page">
					<div class="row row-centered">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-centered">
							<div class="executive-circle responsive">
								<div id="inner-circle">
									<div id="executive-desc">
										<h5 id="executive-title">CEO</h5>
										<p class="text-center"><b><?php the_field('ceo_name'); ?></b><br />
											<?php the_field('ceo_email'); ?><br />
											<?php the_field('ceo_phone'); ?><br />
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-centered">
							<div class="executive-circle responsive">
								<div id="inner-circle">
									<div id="executive-desc">
										<h5 id="executive-title">HEAD COACH</h5>
										<p class="text-center"><b><?php the_field('head_coach_name'); ?></b><br />
											<?php the_field('head_coach_email'); ?><br />
											<?php the_field('head_coach_phone'); ?><br />
										</p>
									</div>
								</div>
							</div>
						</div>


						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-centered">
							<div class="executive-circle responsive">
								<div id="inner-circle">
									<div id="executive-desc">
										<h5 id="executive-title">LAW OFFICER</h5>
										<p class="text-center"><b><?php the_field('law_officer_name'); ?></b><br />
											<?php the_field('law_officer_email'); ?><br />
											<?php the_field('law_officer_phone'); ?><br />
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="contact-address light-gray">
				<div class="container contact-page">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h2 id="address-heading">IDEA'S MAILING ADDRESS</h2>
							<p id="address">
								IDEA Labe<br />
								001 Hayden Hall at Northeastern University<br />
								370 Hungington Avenue<br />
								Boston, MA 02116
							</p>
							<p id="address-instructions">If you plan on visiting the IDEA lab, please park in the Renaissance Parking Garage located on Columbus Avenue. For public transportation, take the orange line to Ruggles Station.</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1474.5720040011074!2d-71.0883931588608!3d42.33945298770844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37a18882711db%3A0x781871daac1be034!2s370+Huntington+Ave+Hayden+Hall%2C+Northeastern+University%2C+Boston%2C+MA+02115!5e0!3m2!1sen!2sus!4v1408065111531" width="400" height="300" frameborder="0" style="border:0"></iframe>
						</div>
					</div>
				</div>=
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->


	<?php get_footer(); ?>
