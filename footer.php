<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wp-theme-001
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo" xmlns="http://www.w3.org/1999/html">

		<div class="copyright">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<p>
                            <a href="<?php echo esc_url(home_url("/")) ?>">André Seidel</a>, Copyright <?php echo('&copy;') . date("Y"); ?>. All Rights Reserved.<br/>
                            <a href="#">Privacy Policy</a> &#124; <a href="#">Terms of Service</a> &#124; Powered by <a href="http://wordpress.org/" target="_blank">Wordpress</a>.
						</p>
					</div>
					<div class="col-md-6"></div>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->

</div><!-- #page -->

<a id="back-to-top" href="#top" title="Scroll Back to Top" class="scroll" style="position: fixed; bottom: 5px; right: 10px; opacity: 1; cursor: pointer;"></a>

<?php wp_footer(); ?>

</body>
</html>
