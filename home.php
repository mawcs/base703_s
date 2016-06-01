<?php
/**
 * The home page template file
 *
 * This is the dedicated home page.
 *
 * @package SevenOThree
 * @package 703base
 * @since 703Base 0.1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/vend/wow.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/homepage/js/p.js"></script>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/homepage/font/raleway.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/homepage/font/socicon.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/less/homepage.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="homepage" >
	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-content">

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->

			<div class="site-branding"><!--TODO Fix the z-index issue-->

				<?php if ( get_theme_mod( 'logo' ) ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_theme_mod( 'logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php endif; ?>

			</div><!-- .site-branding -->

		</div>
	</header><!-- #masthead -->

	<section id="hero" class="wow">
		<div class="hero-content">
			<div class="call-to-action-block">

			</div>
		</div>
	</section>

	<section id="">

	</section>

	<section id="">

	</section>

	<footer id="homepage-footer">
		<div class="homepage-footer-wrapper wow">

			<div class="footer-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_theme_mod( 'logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
			</div>

			<div class="newsletter-signup">
				

			</div>

			<div class="social-icons">
				<a href="https://www.facebook.com/moversmakersxyz"><span class="socicon socicon-facebook"></span></a>
				<a href="https://twitter.com/moversmakersxyz"><span class="socicon socicon-twitter"></span></a>
				<!--<a href="https://www.linkedin.com/in/><span class="socicon socicon-linkedin"></span></a>-->
				<a href="https://google.com/+MoversandMakersXYZ"><span class="socicon socicon-google"></span></a>
				<a href="https://www.youtube.com/channel/UCozq9mc4zdDvJlhaeqD4igQ"><span class="socicon socicon-youtube"></span></a>
				<!--<a href=""><span class="socicon socicon-vimeo"></span></a>-->
				<!--<a href=""><span class="socicon socicon-soundcloud"></span></a>-->
				<a href="rss"><span class="socicon socicon-rss"></span></a>
			</div>

			<div class="subfooter">
				<span class="copyright">&copy;2016 Williamson Creative, LLC. DBA 703 Creative. All Rights Reserved</span>
				<ul class="subnav">
					<li><a href="sitemap">Sitemap</a></li>
					<li><a href="privacy">Privacy</a></li>
					<li><a href="terms">Terms</a></li>
				</ul>
			</div>

		</div>


	</footer>


<?php wp_footer(); ?>

</body>
</html>