<?php
if ( ! is_active_sidebar( 'primary-sidebar' ) ) {
	return;
}
?>

<div id="primary-sidebar" class="primary-sidebar">
	<?php dynamic_sidebar( 'primary-sidebar' ); ?>
</div>
