<?php
/**
 * The template part for displaying a Management Team Postition Opening
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>
				<!-- This one whole open position post that appears on the open positions archive page -->
				<!-- This code is generated multiple times by wordpress -->
			<section id="openings-single" class="openings-single">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h2><?php the_title(); ?></h2>
						<p><?php the_field('position_desc'); ?></p>
						<h5>Requirements:</h5>
						<div class="openings-requirements"><?php the_field('position_requirements'); ?></div>
					</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h5>Think you've got what it takes? Apply today!</h5>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
								<button class="btn btn-lg">APPLY NOW</button>  
							</div>
						</div>
					</div>
				</div> 
			</section><!-- .Team-Member -->




