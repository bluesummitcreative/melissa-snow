<?php
  /*Template Name: Full-Width, No Sidebar*/
	get_header(); 
	get_template_part('inc/page-header');
	echo '<div class="container">
        	<div class="row">';
		get_template_part('inc/loop');
		get_sidebar();
	echo '	</div><!-- /.row -->
    	</div><!-- /.container -->';
	get_footer();
?>
