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
<div id="footer-sidebar1">
<?php
if(is_active_sidebar('footer-sidebar-1')){
dynamic_sidebar('footer-sidebar-1');
}
?>
</div>
<div id="footer-sidebar2">
<?php
if(is_active_sidebar('footer-sidebar-2')){
dynamic_sidebar('footer-sidebar-2');
}
?>
</div>
<div class="footer-logo">
					<a href="inhabitent/home">
					<img src="<?php echo get_template_directory_uri() ?>/images/inhabitent-logo-text.svg" alt="Inhabitent Logo"></a>
					</div>
					</div> <!-- info wrapper -->
				</div><!-- .site-info -->
				<p class="copyright">Copyright &copy; 2017 Inhabitent</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		

		<?php wp_footer(); ?>
		
	</body>
</html>
