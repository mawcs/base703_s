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

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/homepage/font/freestyle-script.css">
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

	<section id="hero" class="wow altbg">
		<div class="hero-content">
			<div class="call-to-action-block">
				<div class="heroheader">
					
				</div>
				<div class="herobuttons">
					<a href="keynote" class="btn secondary">Learn More</a>
				</div>
				<div class="hero-subtext">
					
				</div>
			</div>
		</div>
	</section>

	<section id="currentstuff-block">
		<div class="current-wrapper">
			<div class="current-content">
				<h2>Current Stuff</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu bibendum arcu, vitae commodo dui. Nullam cursus, orci dignissim accumsan malesuada, nisi arcu blandit lacus, at pulvinar nisl leo sit amet tortor. Etiam lacinia, nisl a ornare gravida, enim orci egestas nibh, in iaculis metus diam a arcu. Praesent blandit tempor tellus, eleifend eleifend mauris sagittis at. Praesent placerat nulla et nisl hendrerit efficitur. Etiam vel pellentesque lectus. Ut tellus ligula, eleifend nec tellus at, sodales varius turpis.</p>
				<p>Aenean purus diam, commodo non dignissim ut, eleifend nec mauris. Nullam varius suscipit metus vel viverra. Duis semper sagittis orci, ac sodales lectus scelerisque vel. Nullam nec maximus tortor. Proin vel risus in urna tempus posuere et eget erat. Vestibulum sit amet velit metus. Etiam mauris ipsum, pellentesque ut ullamcorper semper, varius consectetur felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque nulla velit, volutpat eget orci id, sodales ultrices sem.</p>
			
			</div>
		</div>
	</section>

	<section id="homepage-video">
		<div class="hompage-video-wrapper">

			<div class="homepage-video-content">
				<h2>Video Stuff</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu bibendum arcu, vitae commodo dui. Nullam cursus, orci dignissim accumsan malesuada, nisi arcu blandit lacus, at pulvinar nisl leo sit amet tortor. Etiam lacinia, nisl a ornare gravida, enim orci egestas nibh, in iaculis metus diam a arcu. Praesent blandit tempor tellus, eleifend eleifend mauris sagittis at. Praesent placerat nulla et nisl hendrerit efficitur. Etiam vel pellentesque lectus. Ut tellus ligula, eleifend nec tellus at, sodales varius turpis.</p>
				<p>Aenean purus diam, commodo non dignissim ut, eleifend nec mauris. Nullam varius suscipit metus vel viverra. Duis semper sagittis orci, ac sodales lectus scelerisque vel. Nullam nec maximus tortor. Proin vel risus in urna tempus posuere et eget erat. Vestibulum sit amet velit metus. Etiam mauris ipsum, pellentesque ut ullamcorper semper, varius consectetur felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque nulla velit, volutpat eget orci id, sodales ultrices sem.</p>
			
			</div>
		</div>
	</section>

	<footer id="homepage-footer">
		<div class="homepage-footer-wrapper wow">

			<div class="footer-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_theme_mod( 'logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
			</div>

			<div class="newsletter-signup">
				<h2>Sign up for our newsletter.</h2>

				<div class="newsletter-form">
					<form id="signupSubscriberForm" method="post" action="http://michaelallenwilliamson.campayn.com/contacts/signup_form_add_contact/30406" accept-charset="utf-8">
						<input type="hidden" name="formId" value="33361">
						<input type="text" placeholder="Name" name="first_name" id="newsletter-name" required>
						<input type="email" placeholder="Email" name="email" id="newsletter-email" required>
						<input type="submit" name="newsletter-submit" id="newsletter-submit" value="Sign Up">
					</form>
				</div>

				<div class="newsletter-message">
					<h3></h3>
					<p></p>
				</div>

			</div>

			<div class="social-icons">
				<!--//TODO wire these up to James' social stuff-->
				<a href="https://www.facebook.com/___"><span class="socicon socicon-facebook"></span></a>
				<a href="https://twitter.com/___"><span class="socicon socicon-twitter"></span></a>
				<a href="https://www.linkedin.com/in/___"><span class="socicon socicon-linkedin"></span></a>
				<a href="https://plus.google.com/u/0/___"><span class="socicon socicon-google"></span></a>
				<a href="https://www.youtube.com/user/___"><span class="socicon socicon-youtube"></span></a>
				<!--<a href=""><span class="socicon socicon-vimeo"></span></a>-->
				<!--<a href=""><span class="socicon socicon-soundcloud"></span></a>-->
				<a href="rss"><span class="socicon socicon-rss"></span></a>
			</div>

			<div class="subfooter">
				<span class="copyright">&copy;2015 Williamson Creative, LLC. DBA 703 Creative. All Rights Reserved</span>
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