<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karaoke
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="footer">
				<div class="row">
					<div class="col-md-4 footer-1">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<div class="col-md-4 footer-2">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					<div class="col-md-4 footer-3">
						<?php dynamic_sidebar( 'footer-3' ); ?>
						<?php echo do_shortcode('[contact-form-7 id="9" title="Subscrible footer"]') ?>
					</div>
				</div>
			</div>
			<div class="copyright">
				<?php dynamic_sidebar( 'copyright' ); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
