<?php get_header( 'opening' ); ?>

<header class="site-header" role="banner">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/">Base Theme</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryMenuItems" aria-controls="primaryMenuItems" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'primaryMenuItems',
			'menu_class'        => 'navbar-nav mr-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) ); ?>
	</nav>
</header>

<div id="content" class="site-content">
