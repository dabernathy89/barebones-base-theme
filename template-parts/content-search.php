<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<div class="entry-meta">
			<time class="updated" datetime="<?php echo get_post_time( 'c', true ); ?>"><?php echo get_the_date(); ?></time>
			<p class="byline author vcard">
				By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php echo get_the_author(); ?></a>
			</p>
		</div>
	</header>

	<div class="entry-content summary">
		<?php the_excerpt(); ?>
	</div>
</article>
