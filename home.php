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
	<script src="<?php bloginfo('template_directory'); ?>/homepage/js/p.js"></script>

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

	<section id="hero" class="altbg">
		<div class="hero-content">
			<div class="call-to-action-block">
				<div class="heroheader">
					<span class="pretext">The</span> <span class="fl forgive">Forgive</span><span class="and">&</span><span class="fl Live">Live</span><span class="pretext">Experience</span>
				</div>
				<div class="herobuttons">
					<a class="btn primary">Book Now</a>
					<a class="btn secondary">Learn More</a>
				</div>
				<div class="hero-subtext">
					<p>Keynote stories of forgiveness, encouragement, and inspiration.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="current-content">
		<div class="current-wrapper">
			<div class="current-items">
                <div class="current-event">
	                <h2>Upcoming Events</h2>
	                <div>
		                <h3>Replace me with WP stuff</h3>
	                </div>
                </div>
				<div class="current-podcast">
					<h2>Latest Podcast</h2>
					<div>
						<h3>Replace me with WP stuff</h3>
					</div>
				</div>
				<div class="current-podcast">
					<h2>From the Blog</h2>
					<div>
						<h3>Replace me with WP stuff</h3>
					</div>
				</div>
			</div>
			<div class="testimonials">
				<div class="testimonial-wrapper">
					<blockquote>
						<p class="quotetext">Replace me with WP stuff</p>
						<p class="byline">The Person</p>
					</blockquote>
					<div class="testimonials-more">
						<a href="#" class="btn secondary">More Testimonials</a>
						<div class="pns">
							<a href="#" class="pn left nonext">&#139;</a>
							<a href="#" class="pn right">&#155;</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="homepage-video">
		<!--<h1>VIDEO</h1>-->
	</section>

	<footer id="homepage-footer">
		<!--<h1>FOOTER</h1>-->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<img src="<?php echo get_theme_mod( 'logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</footer>


<?php wp_footer(); ?>

</body>
</html>