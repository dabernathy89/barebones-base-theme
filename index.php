<?php get_header(); ?>

<div class="container">
	<div class="row">
		<main class="site-main col-sm-9">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->

		<aside class="sidebar-wrap col-sm-3">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>

<?php
get_footer();
