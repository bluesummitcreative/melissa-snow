<?php
	//Enqueue Styles and Scripts
	function bsc_enqueue_styles_scripts() {
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.css');
		wp_enqueue_style( 'elegant-fonts', get_template_directory_uri() . '/assets/fonts/elegant-fonts.css');
		wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:400,300,700,900|Raleway:400,700');
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css');
		wp_enqueue_style( 'zabuto_calendar.min', get_template_directory_uri() . '/assets/css/zabuto_calendar.min.css');
		wp_enqueue_style( 'bootstrap-select.min', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css');
		wp_enqueue_style( 'settings', get_template_directory_uri() . '/assets/revolution/css/settings.css');
		wp_enqueue_style( 'layers', get_template_directory_uri() . '/assets/revolution/css/layers.css');
		wp_enqueue_style( 'navigation', get_template_directory_uri() . '/assets/revolution/css/navigation.css');
		wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
		
		wp_enqueue_script( 'jquery-2.1.4.min', get_template_directory_uri() . '/assets/js/jquery-2.1.4.min.js', array(), null, true );
		wp_enqueue_script( 'jquery-migrate-1.2.1.min', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js', array(), null, true );
		wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), null, true );
		wp_enqueue_script( 'bootstrap-select.min', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array(), null, true );
		wp_enqueue_script( 'zabuto_calendar.min', get_template_directory_uri() . '/assets/js/zabuto_calendar.min.js', array(), null, true );
		wp_enqueue_script( 'jquery.validate.min', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), null, true );

		wp_enqueue_script( 'jquery.themepunch.tools.min.js', get_template_directory_uri() . '/assets/revolution/js/jquery.themepunch.tools.min.js', array(), null, true );
		wp_enqueue_script( 'jquery.themepunch.revolution.min', get_template_directory_uri() . '/assets/revolution/js/jquery.themepunch.revolution.min.js', array(), null, true );
		wp_enqueue_script( 'revolution.extension.video.min', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.video.min.js', array(), null, true );
		wp_enqueue_script( 'revolution.extension.slideanims.min', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.slideanims.min.js', array(), null, true );
		wp_enqueue_script( 'revolution.extension.actions.min', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.actions.min.js', array(), null, true );
		wp_enqueue_script( 'revolution.extension.layeranimation.min', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js', array(), null, true );
		wp_enqueue_script( 'revolution.extension.kenburn.min', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.kenburn.min.js', array(), null, true );
		wp_enqueue_script( 'revolution.extension.navigation.min', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.navigation.min.js', array(), null, true );
		wp_enqueue_script( 'revolution.extension.migration.min', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.migration.min.js', array(), null, true );
		wp_enqueue_script( 'revolution.extension.parallax.min', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.parallax.min.js', array(), null, true );

		wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), null, true );
		wp_enqueue_script( 'ie', get_template_directory_uri() . 'assets/js/ie.js' );
		wp_script_add_data( 'ie', 'conditional', 'lt IE 9' ); //IE9
	}

	if (!is_admin()) add_action( 'wp_enqueue_scripts', 'bsc_enqueue_styles_scripts' ); //Load styles and scripts on non-admin screens
?>
