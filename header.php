<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pretzel_Plate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Pretzel Plate custom style from redux framework -->
	<style type="text/css">
            <?php  global $pretzel_plate; echo $pretzel_plate['custom_style_editor']; ?>
        </style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php global $woocommerce; ?>

        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<header>
	<div class="top-header"  >
    	<div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="contact-phone">
                    <a href="tel:9077389"><i class="fa fa-phone"></i><?php global $pretzel_plate; echo $pretzel_plate['phone_number']; ?></a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="top-menu f-right">
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'top_menu'
                    ) );
                ?>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="logo-area">
                        <a href="<?php bloginfo('home'); ?>"><img src="<?php  echo $pretzel_plate['logo_area'] ['url']; ?>"></a>
                    </div>
                </div>
                <div class="col-xl-9">
					<div class="header-wrapper">
						<div class="main-menu">
							<?php 
								wp_nav_menu( array(
									'theme_location' => 'main_menu'
								) );
							?>
						</div>
						<div class="woo-cat-icon">
						<?php echo do_shortcode("[woo_cart_but]"); ?>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</header>
