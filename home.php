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
					<span class="pretext">The</span> <span class="fl forgive">Forgive</span><span class="and">&</span><span class="fl Live">Live</span><span class="pretext">Experience</span>
				</div>
				<div class="herobuttons">
					<a href="book" class="btn primary">Book Now</a>
					<a href="keynote" class="btn secondary">Learn More</a>
				</div>
				<div class="hero-subtext">
					<p>Keynote stories of forgiveness, encouragement, and inspiration.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="currentstuff-block">
		<div class="current-wrapper">
			<div class="current-content">
				<div class="current-items">
					<div class="current-event wow">
						<h2>Upcoming Events</h2>
						<?php

						$catid = get_category_by_slug( 'events' );
						$args = array(
								'numberposts' => 1,
								'offset' => 0,
								'category' => $catid->term_id,
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'post',
								'post_status' => 'publish',
								'suppress_filters' => true );

						$latest_event = wp_get_recent_posts( $args, ARRAY_A );
						foreach($latest_event as $latest ){
							echo '<div>'.
									get_the_post_thumbnail($latest["ID"], "thumbnail") .
									'<a href="'. get_permalink($latest["ID"]) .'"><h3>'. $latest["post_title"] .'</h3></a>'.
									'<a class="register" href="'. get_permalink($latest["ID"]) .'">Register</a>'.
								 '</div>';
						}
						?>
					</div>
					<div class="current-podcast wow">
						<h2>Latest Podcast</h2>
						<?php

						$catid = get_category_by_slug( 'podcast' );
						$args = array(
								'numberposts' => 1,
								'offset' => 0,
								'category' => $catid->term_id,
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'post',
								'post_status' => 'publish',
								'suppress_filters' => true );

						$latest_podcast = wp_get_recent_posts( $args, ARRAY_A );
						foreach($latest_podcast as $latest ){
							$content = substr(strip_shortcodes(preg_replace('/<img[^>]+./','',$latest["post_content"])),0,250);
							echo '<div>'.
									get_the_post_thumbnail($latest["ID"], "thumbnail") .
									'<a href="' . get_permalink($latest["ID"]) . '"><h3>' .
									$latest["post_title"].'</h3></a><p class="postdate">' .
									$latest["post_date"].'</p><p>' .
									$content.'&hellip;</p><div class="readmore"><a href="' .
									get_permalink($latest["ID"]) . '">Continue</a></div></div> ';
						}
						?>
					</div>
					<div class="current-blog wow">
						<h2>From the Blog</h2>

						<?php

						$catid = get_category_by_slug( 'blog' );
						$args = array(
								'numberposts' => 1,
								'offset' => 0,
								'category' => $catid->term_id,
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'post',
								'post_status' => 'publish',
								'suppress_filters' => true );

						$latest_blog = wp_get_recent_posts( $args, ARRAY_A );
						foreach($latest_blog as $latest ){
							$content = substr(strip_shortcodes(preg_replace('/<img[^>]+./','',$latest["post_content"])),0,250);
							echo '<div>'.
									get_the_post_thumbnail($latest["ID"], "thumbnail") .
									'<a href="' . get_permalink($latest["ID"]) . '"><h3>' .
									$latest["post_title"].'</h3></a><p class="postdate">' .
									$latest["post_date"].'</p><p>' .
									$content.'&hellip;</p><div class="readmore"><a href="' .
									get_permalink($latest["ID"]) . '">Continue</a></div></div> ';
						}
						?>
					</div>
				</div>
				<div class="testimonials">
					<div class="testimonial-wrapper">
						<div class="testimonial">

							<?php

							$catid = get_category_by_slug( 'testimonials' );
							$args = array(
									'numberposts' => 5,
									'offset' => 0,
									'category' => $catid->term_id,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => 'post',
									'post_status' => 'publish',
									'suppress_filters' => true );

							$latest_blog = wp_get_recent_posts( $args, ARRAY_A );
							foreach($latest_blog as $latest ){
								$content = strip_shortcodes(preg_replace('/<img[^>]+./','',$latest["post_content"]));
								echo '<div id="'.$latest["ID"].'">'.
										$content.
									 '</div> ';
							}
							?>
						</div>
						<div class="testimonials-more">
							<a href="category/testimonials" class="btn secondary">More Testimonials</a>
							<div class="pns">
								<span class="pn left nonext">&#139;</span>
								<span class="pn right">&#155;</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="homepage-video">
		<div class="hompage-video-wrapper">

			<div class="homepage-video-content">
				<h2>Video</h2>
				<iframe src="https://www.youtube.com/embed/zhrGAfSwVnc" frameborder="0" allowfullscreen></iframe>

				<div>
					<a href="media/video"><h3>More Video</h3></a>
				</div>
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
				<h2>Forgiveness and Living in your inbox.</h2>

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
				<a href="https://www.facebook.com/jamesthejazzysaxman"><span class="socicon socicon-facebook"></span></a>
				<a href="https://twitter.com/jamesthedivine"><span class="socicon socicon-twitter"></span></a>
				<a href="https://www.linkedin.com/in/james-divine-235a9686"><span class="socicon socicon-linkedin"></span></a>
				<a href="https://plus.google.com/u/0/104128844095888066226"><span class="socicon socicon-google"></span></a>
				<a href="https://www.youtube.com/user/divinejames"><span class="socicon socicon-youtube"></span></a>
				<!--<a href=""><span class="socicon socicon-vimeo"></span></a>-->
				<a href="http://www.cdbaby.com/Artist/JamesDivine" class="cdbabylink"><span class="socicon cdbaby">&nbsp;</span></a>
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