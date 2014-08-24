<?php
/**
 * The template part for displaying a Venture Member
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>
				<!-- This one whole venture thumbnail that appears on the archive page -->
				<!-- This code is generated multiple times by wordpress -->
				<div class="v-center col-xs-6 col-sm-6 col-md-3 col-lg-3">  
					<div class="venture-member">
						<figure class="cap-bot">
							<img src="http://placehold.it/300x300" class="thumbnail img-responsive">
							<figcaption>
								<div id="venture-status"><?php the_field('position'); ?></div>
								<div id="venture-name"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br /></div>
							</figcaption>
						</figure>
					</div>
				</div> <!-- /.Venture -->




