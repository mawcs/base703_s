<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base703_s
 */

?>

	</div><!-- #content -->



	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-content">
			<div class="footer-widgets">
				<?php if ( is_active_sidebar('footer-widget-area-1')) : ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
					</div>
				<?php endif ?>
				<?php if ( is_active_sidebar('footer-widget-area-2')) : ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
					</div>
				<?php endif ?>
				<?php if ( is_active_sidebar('footer-widget-area-3')) : ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
					</div>
				<?php endif ?>
				<?php if ( is_active_sidebar('footer-widget-area-4')) : ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'footer-widget-area-4' ); ?>
					</div>
				<?php endif ?>
			</div>
			&nbsp;
		</div>

		<div class="subfooter">
			<div class="subfooter-content">
				<div class="copyright-info">
					&copy;2015 Williamson Creative, LLC. DBA 703 Creative. All Rights Reserved.
				</div><!-- .copyright-info -->

				<div class="site-info">
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'base703_s' ), 'base703_s', '<a href="http://703creative.com/" rel="designer">703 Creative</a>' ); ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
