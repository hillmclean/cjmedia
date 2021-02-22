<?php
/**
 * The template for displaying the footer.
 *
 * @package Chelsea_Jade_Media_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

			<?php if ( ! is_active_sidebar( 'footer' ) ) { return; } ?>

				<div id="secondary" class="widget-area-footer" role="complementary">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>

				<a class="cta-button" href="<?php echo esc_url( home_url( '/contact' ) ); ?>" rel="contact">Contact</a>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
