<?php
/**
 * Template Name: List of Posts
 *
 * @package base703_s
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
			$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
			$args = array(
				'posts_per_page' => get_option('posts_per_page'), // the value from Settings > Reading by default
				'paged'          => $current_page // current page
			);
			query_posts( $args );

			$wp_query->is_archive = true;
			$wp_query->is_home = false;

			while(have_posts()): the_post();
			?>
				<?php

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );
				?>
			<?php
			endwhile;

			if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
