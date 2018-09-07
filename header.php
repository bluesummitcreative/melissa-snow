<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="overlay"></div>

<div class="outer-wrapper">
<div class="page-wrapper">

    <header class="navigation" id="top">
        <div class="container">
            <div class="secondary-nav">
                <span><a href="mailto:<?php echo esc_html( get_bloginfo( 'admin_email' ) ); ?>"><i class="icon_mail"></i><?php echo esc_html( get_bloginfo( 'admin_email' ) ); ?></a></span>
                <span><i class="icon_phone"></i>(303) 233-3977</span>
            </div>
            <!--/.secondary-nav-->
            <div class="main-nav">
                <div class="brand"><a href="<?php echo esc_url(home_url()); ?>"><img src="/wp-content/uploads/melissa-snow-logo.png" alt=""></a></div><!--/.brand-->
                <nav>
		     <?php
                        $defaults = array(
                            'menu'            => 'Header Menu',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => new bsc_walker()	
                        );
                        wp_nav_menu( $defaults );
                     ?>
                    <div class="nav-toggle"><i class="icon_menu"></i></div>
                </nav>
                <a href="#make-an-appointment" class="icon-shortcut"><i class="icon_calendar" title="Make an Appointment"></i></a><!--/.icon-->
            </div>
            <!--/.main-nav-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
