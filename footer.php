<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wp-theme-001
 */
?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wp-theme-001' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'wp-theme-001' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'wp-theme-001' ), 'wp-theme-001', '<a href="http://andreseidel.com" rel="designer">André Seidel</a>' ); ?>
			</div><!-- .site-info -->

		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<a id="back-to-top" href="#top" title="Scroll Back to Top" class="scroll" style="position: fixed; bottom: 5px; right: 10px; opacity: 1; cursor: pointer;"></a>

<?php wp_footer(); ?>

</body>
</html>
