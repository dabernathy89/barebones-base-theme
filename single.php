<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Base_Theme
 */

get_header(); ?>

<div class="container single">
	<div class="row">
		<main class="site-main col-sm-9">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content' );

			endwhile;
			?>

		</main>

		<aside class="sidebar-wrap col-sm-3">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>

<?php
get_footer();
