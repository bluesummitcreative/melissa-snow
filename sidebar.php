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
				<li><a href="#">June 2014</a></li>
				<li><a href="#">May 2014</a></li>
				<li><a href="#">April 2014</a></li>
				<li><a href="#">March 2014</a></li>
				<li><a href="#">January 2014</a></li>
				<li><a href="#">December 2013</a></li>
				<li><a href="#">November 2013</a></li>
				<li><a href="#">August 2013</a></li>
			</ul>
		</aside><!-- /#post-archive -->
		<aside id="categories">
			<header><h3>Categories</h3></header>
			<ul class="list-links">
				<li><a href="#">Architecture</a></li>
				<li><a href="#">Apartments</a></li>
				<li><a href="#">Design</a></li>
				<li><a href="#">Do it yourself</a></li>
				<li><a href="#">Housing</a></li>
				<li><a href="#">Interior</a></li>
				<li><a href="#">Trends</a></li>
			</ul>
		</aside><!-- /#categories -->
	</section><!-- /#sidebar -->
</div><!-- /.col-md-3 -->
<!-- end Sidebar -->
