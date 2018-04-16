<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
	<input type="text" class="form-control framed" value="<?php echo get_search_query() ?>" name="s" placeholder="<?php echo esc_attr_x( 'Enter Keyword', 'placeholder') ?>">
	<span class="input-group-btn"><button class="btn btn-primary" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button') ?>"><i class="fa fa-search"></i></button></span>
</form>	
