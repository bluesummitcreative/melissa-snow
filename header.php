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
            </div>
            <!--/.main-nav-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
