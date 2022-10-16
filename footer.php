<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>


		</div><!-- #main -->
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<div id="footer-1" class="footer-1 widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		<?php endif; ?>
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
