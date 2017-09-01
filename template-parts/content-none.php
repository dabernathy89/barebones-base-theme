<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title">Page Not Found</h1>
	</header>

	<div class="page-content">
		<?php if ( is_search() ) : ?>
			<p>There were no results found. Please try a different search.</p>
		<?php else : ?>
			<p>We couldn't find that page. Try searching:</p>
		<?php endif; ?>

		<?php get_search_form(); ?>
	</div>
</section>
