<?php get_header(); ?>

<div class="container archive">
	<div class="row">
		<main class="site-main col-sm-9">
			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header>

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main>

		<aside class="sidebar-wrap col-sm-3">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>

<?php
get_footer();
