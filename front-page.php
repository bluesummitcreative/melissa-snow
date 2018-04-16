<?php 
	get_header();
	get_template_part('inc/home-slider');
		echo '<div class="page-content">';
			get_template_part('inc/home-features');
			get_template_part('inc/home-quote');
			get_template_part('inc/home-about');
			get_template_part('inc/home-freebie');
			get_template_part('inc/home-steps');
			get_template_part('inc/home-form');
			get_template_part('inc/home-appointment');
			get_template_part('inc/home-testimonials');
			get_template_part('inc/home-packages');
		echo '</div>';
    get_footer(); 
?>