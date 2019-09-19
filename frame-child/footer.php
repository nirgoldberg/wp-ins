<?php
/**
 * The template for displaying the footer.
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
			</div><!-- #content -->
		</div><!-- .container -->
	</div><!-- #primary -->

	<?php po_change_loop_to_parent( 'change' ); ?>
	<?php if ( ! pojo_is_blank_page() && ! pojo_elementor_theme_do_location( 'footer' ) ) : ?>
		<footer id="footer" role="contentinfo">

			<?php
				/**
				 * Display the footer sections
				 */
				get_template_part( 'views/footer/footer', 'sections' );
			?>

			<?php
				/**
				 * Display the footer columns
				 */
				get_template_part( 'views/footer/footer', 'columns' );
			?>

			<div id="copyright">
				<div class="<?php echo WRAP_CLASSES; ?>">
					<div class="footer-text-left pull-left">
						<?php printf( '%s &copy; %s', get_bloginfo( 'name' ), date( 'Y' ) ); ?>
					</div>
					<div class="footer-text-right pull-right">HTMLine - <a href="http://www.htmline.com/" target="_blank"><?php _e( 'Website Development', 'pojochild' ); ?></a></div>
				</div><!-- .<?php echo WRAP_CLASSES; ?> -->
			</div>
		</footer>
	<?php endif; // end blank page ?>
	<?php po_change_loop_to_parent(); ?>

</div><!-- #container -->
<?php wp_footer(); ?>
</body>
</html>
