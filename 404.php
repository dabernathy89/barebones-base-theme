<?php get_header(); ?>

<div class="container error-404 not-found">
	<div class="row">
		<main class="site-main col">
			<header class="page-header">
				<h1 class="page-title">Page not found</h1>
			</header>

			<div class="page-content">
				<p>We couldn't find that page. Try searching:</p>

				<?php get_search_form(); ?>
			</div>
		</main>
	</div>
</div>

<?php
get_footer();
