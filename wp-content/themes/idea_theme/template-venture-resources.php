<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Venture Resources
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
	- Icons
	- Add Banner BG picture
	- Typography styling
	- Coach connect fund, if necessary

*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<section id="tag-banner" class="tag-banner">
			<div class="container banner-text-container">
				<div class="row">
					<div id="text-container-bg"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<h1>Venture Resources</h1>
						<p>IDEA supports ventures within the program in three main ways: Coach, Connect, and Fund.  </p>
					</div>
				</div>
			</div>
	</section>

	<section id="vr-ccc" class="dark-blue">
		<div class="container vr-page">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<h1>Coach</h1>
					<p class="lead">Coaching includes undergraduate coaches, Mentors who are industry experts, and collaboration with advisers and professors at Northeastern. </p>

				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<h1>Connect</h1>
						<p class="lead">For Connect, ventures work with our Service Providers for in-kind professional services in various industries, attend and present at our flagship events, and get introductions to variety of individuals in our network. </p>

				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<h1>Fund</h1>
						<p class="lead">Lastly, we help Fund ventures up to $10,000 via our non-equity Gap Fund and work with our Investor network to find angel and venture capital financing that matches up well with their business. </p>					
				</div>								
			</div>
		</div>
		<div class="section-arrow" id="vr-arrow"></div>
	</section>


	<section>
		<div class="container vr-page">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<div id="vr-sidebar" data-spy="affix" data-offset-top="730" data-offset-bottom="200">
						<ul>
							<li><a href="#vr-1">Coaching</a></li>
							<li><a href="#vr-2">Mentoring</a></li>
							<li><a href="#vr-3">Business Planning Guide</a></li>
							<li><a href="#vr-4">Service Providers</a></li>
							<li><a href="#vr-5">Partnerships & Relationships</a></li>
							<li><a href="#vr-6">Investor Network</a></li>
							<li><a href="#vr-7">Gap Fund</a></li>
							<li><a href="#vr-8">Prototype Fund</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<a name="vr-1" id="vr-anchor"></a>
					<div class="vr-category row">
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<h2>COACHING</h2>
							<p>Coaches serve as the connectors between ventures and IDEA's network and resources. Coaches are trained to use IDEA's Business Planning Guide to help ventures through the Ready-Set-Go stagegate process and help them utilize the tools provided to get past roadblocks. In order to make them as effective at working with ventures as possible, they are on-boarded with IDEA's Head Coach, then connected through coaching roundtables where they collaborate and learn tangible skills</p> 
						</div>
						<div class="col-xs-1 col-sm-1 col-md-3 col-lg-3">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/icons/icons-coaches.png" class="img-responsive" />
						</div>
					</div>
				<a name="vr-2" id="vr-anchor"></a>
					<div class="vr-category row">
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<h2>MENTORING</h2>
							<p>Mentors are industry professionals with five or more years of experience who work with ventures starting in the Set stage. Where Coaches offer expertise over IDEA's process, Mentors use their experience to help ventures understand their industry and how to break into it. IDEA is connected with Mentors who are experts in biotech, consumer product, marketing, and everything in between.</p> 
						</div>
						<div class="col-xs-1 col-sm-1 col-md-3 col-lg-3">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/icons/icons-mentors.png" class="img-responsive" />
						</div>
					</div>
				<a name="vr-3" id="vr-anchor"></a>
					<div class="vr-category row">
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<h2>BUSINESS PLANNING GUIDE</h2>
							<p>The IDEA Business Planning Guide is the backbone of the process that ventures use to help them create their venture and plans. The Guide maps out each step ventures need to take in order for their idea to mature. These steps, or milestones, may include adding team members, prototyping, marketing, and pursuing funding. The IDEA Business Planning Guide illustrates the entrepreneurial journey through the different venture stages of Ready, Set, and Go.</p>

							<p>Coupled with intense coaching, the Business planning guide allows the business plan to continually develop as the venture develops, and prepares each venture to answer the difficult questions that will be asked by the Advisory Board during Gap Fund rounds, angel investors, venture capital firms, and beyond.</p> 
						</div>
						<div class="col-xs-1 col-sm-1 col-md-3 col-lg-3">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/icons/icons-guide.png" class="img-responsive" />
						</div>
					</div>
				<a name="vr-4" id="vr-anchor"></a>
					<div class="vr-category row">
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<h2>SERVICE PROVIDERS</h2>
							<p>IDEA works closely with a number of different companies to provide in-kind services to our ventures. We have a number of service providers in different industries, including law firms, accounting firms, marketing and public relations, software platforms, and backend. </p>

							<p>Connections are made through the management team and IDEA's faculty adviser to ensure an efficient use of the services and consistency of venture readiness. Overall, these strategic partnerships help ventures accelerate rapidly as resources are plugged in to meet their needs.</p> 
						</div>
						<div class="col-xs-1 col-sm-1 col-md-3 col-lg-3">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/icons/icons-serviceproviders.png" class="img-responsive" />
						</div>
					</div>
				<a name="vr-5" id="vr-anchor"></a>
					<div class="vr-category row">
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<h2>PARTNERSHIPS & RELATIONSHIPS</h2>
							<p>This is where a brief summary about this resource would go.This is where a brief summary about this resource would go.This is where a brief summary about this resource would go.This is where a brief summary about this resource would go.This is where a brief summary about this resource would go.This is where a brief summary about this resource would go. </p> 
						</div>
						<div class="col-xs-1 col-sm-1 col-md-3 col-lg-3">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/icons/icons-partners.png" class="img-responsive" />
						</div>
					</div>

				<a name="vr-6" id="vr-anchor"></a>
					<div class="vr-category row">
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<h2>INVESTOR NETWORK</h2>
							<p>With the help of our Entrepreneur-in-Residence, IDEA has build and selected a network of investors who are invested in working with and financing ventures in our program. Whether you are looking for an angel investor to give you your first round of outside capital or a venture capital firm to help you raise a Series A round, IDEA connects ventures who have made it all the way through our process to investors that are a good fit.</p> 
						</div>
						<div class="col-xs-1 col-sm-1 col-md-3 col-lg-3">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/icons/icons-network.png" class="img-responsive" />
						</div>
					</div>
				<a name="vr-7" id="vr-anchor"></a>
					<div class="vr-category row">
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<h2>GAP FUND</h2>
							<p>The Gap Fund is a non-equity educational grant that ventures can apply for once they are in the “Go” stage of IDEA's process. Each business plan is reviewed by IDEA’s Investment Committee, CEO, and faculty adviser before being selected to pitch in front of members of IDEA's Advisory Board. </p>

							<p>Over the course of the year, we have approximately $250k to allocate in amounts up to $10k per venture in six rounds throughout the year. Each pitch involves describing the entrepreneur’s business and the milestones that the funding will allow the venture to accomplish. At the point of allocation, members of the Investment Committee work with the venture to solidify the spending plan and set check-in dates.</p> 
						</div>
						<div class="col-xs-1 col-sm-1 col-md-3 col-lg-3">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/icons/icons-gapfund.png" class="img-responsive" />
						</div>
					</div>

				<a name="vr-8" id="vr-anchor"></a>
					<div class="vr-category row">
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<h2>PROTOTYPE FUND</h2>
							<p>The Prototype Fund is awards up to $1,000 at a time to promising prototype concepts at times consistent with our Gap Fund deadlines. You don’t need to be an IDEA venture to apply but we do hope that these concepts will one day develop into profitable ventures. The Prototype Fund is an effort spearheaded by IDEA, Northeastern Entrepreneurs Club, and the Northeastern University Center for Entrepreneurship Education in order to encourage students and recent graduates to take the leap and try to develop their own product.</p> 
						</div>
						<div class="col-xs-1 col-sm-1 col-md-3 col-lg-3">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/icons/icons-prototypefund.png" class="img-responsive" />
						</div>
					</div>

				</div>
			</div>
		</div>
</section>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
