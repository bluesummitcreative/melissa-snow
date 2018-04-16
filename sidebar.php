<!-- sidebar -->
<div class="col-md-4 col-sm-4">
	<section id="sidebar" class="sidebar">
		<aside id="search">
			<header><h3>Search</h3></header>
			<?php get_search_form(); ?>
		</aside>
		<aside id="post-archive">
			<header><h3>Post Archive</h3></header>
			<ul class="list-links">
				<?php wp_get_archives( $args ); ?> 
			</ul>
		</aside><!-- /#post-archive -->
		<aside id="categories">
			<header><h3>Categories</h3></header>
			<ul class="list-links">
				<?php wp_list_categories('title_li='); ?>
			</ul>
		</aside><!-- /#categories -->
	</section><!-- /#sidebar -->
</div><!-- /.col-md-3 -->
<!-- end Sidebar -->
