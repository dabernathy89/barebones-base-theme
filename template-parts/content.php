<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
		<div class="entry-meta">
			<time class="updated" datetime="<?php echo get_post_time( 'c', true ); ?>"><?php echo get_the_date(); ?></time>
			<p class="byline author vcard">
				By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php echo get_the_author(); ?></a>
			</p>
		</div>
	</header>
	<div class="entry-content">
		<?php if ( is_single() ) :
			the_content();
		else :
			the_excerpt();
		endif; ?>
	</div>
</article>
