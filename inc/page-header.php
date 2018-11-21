<div class="heading">
	<div class="container">
		<h1><?php
			if ( is_home() ) { 
				echo 'Blog';
			/*} elseif ( is_404() ) { 
				echo '404 Not Found';*/
			} elseif ( is_post_type_archive() ) {
				echo post_type_archive_title();
			} elseif ( is_search() ) { 
				echo $wp_query->found_posts . ' results found for "' . esc_html( get_search_query( false ) ) .'"';

			} else {
				the_title();
			}
		?></h1>
	</div>
</div>
