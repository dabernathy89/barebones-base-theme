<?php get_header(); ?>

<div class="container search">
	<div class="row">
		<main class="site-main col">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">Search results for: <em>'<?php echo get_search_query(); ?>'</em></h1>
				</header>

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main>
	</div>
</section>

<?php
get_footer();
