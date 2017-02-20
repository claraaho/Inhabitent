<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="info-wrapper">
					<div class="contact-info">
						<h3>Contact Info</h3>
						<p><a href=""><i class="fa fa-envelope" aria-hidden="true"></i></i>info@inhabitent.com</a></p>
						<p><a href=""><i class="fa fa-phone fa-lg" aria-hidden="true"></i>778-456-7891</a></p>
						<p>
							<i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
							<i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
							<i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i>
						</p>
					</div>
					<div class="business-hours">
						<h3>Business Hours</h3>
						<p>Monday-Friday: 9am to 5pm</p>
						<p>Saturday: 10am to 2pm</p>
						<p>Sunday: Closed</p>
					</div>
					</div>
					<img src="<?php echo get_template_directory_uri() ?>/images/inhabitent-logo-text.svg" alt="Inhabitent Logo">
				</div><!-- .site-info -->
				<p class="copyright">Copyright &copy; 2016 Inhabitent</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		
	</body>
</html>
