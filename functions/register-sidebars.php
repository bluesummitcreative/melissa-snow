<?php
	// Register Sidebars
	
	function custom_sidebars() {
		$bsc_theme = wp_get_theme();
		register_sidebar( 
			array(
				'name' => __( 'Default Page Sidebar','blue-summit-creative-bootstrap-for-wordpress'),
				'id' => 'sidebar-1',
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Blog Sidebar','blue-summit-creative-bootstrap-for-wordpress'),
				'id' => 'sidebar-2',
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 1','blue-summit-creative-bootstrap-for-wordpress'),
				'id' => 'footer-widget-1',
				'before_widget' => '<div class="col-md-3 footer-widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 2','blue-summit-creative-bootstrap-for-wordpress'),
				'id' => 'footer-widget-2',
				'before_widget' => '<div class="col-md-3 footer-widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 3','blue-summit-creative-bootstrap-for-wordpress'),
				'id' => 'footer-widget-3',
				'before_widget' => '<div class="col-md-3 footer-widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 4','blue-summit-creative-bootstrap-for-wordpress'),
				'id' => 'footer-widget-4',
				'before_widget' => '<div class="col-md-3 footer-widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		/*register_sidebar( 
			array(
				'name' => __( 'WooCommerce','blue-summit-creative-bootstrap-for-wordpress'),
				'id' => 'woocommerce',
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);*/
	
	}
	add_action( 'widgets_init', 'custom_sidebars' );
?>
