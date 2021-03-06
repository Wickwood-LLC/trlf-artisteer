<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TRLF_s Custom Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'trlf_s' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'trlf_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'trlf_s' ), 'TRLF_s Custom Theme', '<a href="http://www.wickwoodmarketing.com/wp/themes/trlf_s" rel="designer">Wickwood Marketing</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
