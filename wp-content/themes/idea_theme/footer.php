<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Scout-Base
 */
?>

</div><!-- #content -->



<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="container">
		<div class="row">
			<!-- COLUMN 3 -->
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-lg-push-8 col-md-push-8 col-sm-push-8 footer-add-pad">
				<p>Join our mailing list!</p>
				<input></input>
				<button class="btn btn-lg" type="button">Sign up now!</button>

			</div>	

			<!-- COLUMN 2 -->				
			<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 footer-add-pad">
				<div class="footer-get-involved">
					<p>Interested in joining IDEA as a venture, team member, coach, or advisory board member?</p>
					<button class="btn btn-lg" type="button">Get involved!</button>
				</div>
			</div>
			<!-- COLUMN 1 -->
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-lg-pull-8 col-md-pull-8 col-sm-pull-8 footer-add-pad">
				<div class="row footer-nav">
					<ul>
						<li><a href="idea/contact-us">Contact Us</a></li>
						<li><a href="idea/about-idea">About IDEA</a></li>
						<li><a href="idea/blog">Blog</a></li>
					</ul>
				</div>
				<div class="footer-social-media">
					<a href="facebook.com/IDEA"><img src="http://divasmobilesolutions.com/wp-content/uploads/2012/02/fbicon-e1329880206895.png"></a>
					<a href="twitter.com/IDEA"><img src="http://divasmobilesolutions.com/wp-content/uploads/2012/02/twittericon-e1329880313794.png"></a>	
					<a href="linkedi .com/IDEA"><img src="http://divasmobilesolutions.com/wp-content/uploads/2012/02/fbicon-e1329880206895.png"></a>	
				</div>
				<div class="row footer-neu-logo">
		      <img src="<?php bloginfo('template_directory'); ?>/images/logos/NEU_logo_white.png">
				</div>
				<div class="row footer-colophon">
					<p> 2014 IDEA | <b>idea@neu.edu</b>
					</div>
				</div>
		</div>
	</div>

</footer><!-- #colophon -->



</div><!-- #page -->



<?php wp_footer(); ?>



</body>
</html>