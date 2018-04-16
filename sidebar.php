<!-- sidebar -->
<div class="col-md-4 col-sm-4">
	<section id="sidebar" class="sidebar">
		<aside id="search">
			<header><h3>Search</h3></header>
			<div class="input-group">
				<input type="text" class="form-control framed" placeholder="Enter Keyword">
				<span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button></span>
			</div><!-- /input-group -->
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
