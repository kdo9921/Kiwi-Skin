<aside>
	<div class="site-sidebar">
		<form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo( 'url' ); ?>">
			<input class="search-field" type="text" placeholder="<?php _e( 'Search', 'KiwiSkin' ); ?> …" value="" name="s" id="s">
		</form>
		<?php dynamic_sidebar(); ?>
	</div>
</aside>