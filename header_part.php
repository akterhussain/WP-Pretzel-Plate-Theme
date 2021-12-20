<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>"
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
<link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

        <style type="text/css">
            <?php  global $pretzel_plate; echo $pretzel_plate['custom_style_editor']; ?>
        </style>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
<!-- ===================================
        Start Here
========================================-->

 <?php global $woocommerce; ?>
<div class="top_header"  >
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-phone">
                    <p><i class="fa fa-phone"></i> Call : <?php global $pretzel_plate; echo $pretzel_plate['phone_number']; ?></p>
                </div>
            </div>


             

              
             <div class="col-md-4">
                <div class="top-menu">
                <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'top_menu'
                            ) );

                        ?>

                </div>
               
                <div class="cart-menu">
                    <ul>
                    <li><a href="<?php echo $woocommerce->cart->get_cart_url(); ?>"><i class="fa fa-shopping-cart"></i> Cart : <?php  echo $woocommerce->cart->get_cart_total();?> </a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</div>



    <div class="button_header" id="navbar_Header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo_area">
                        <a href="<?php bloginfo('home'); ?>"><img src="<?php  echo $pretzel_plate['logo_area'] ['url']; ?>"></a>
                    </div>
                
                      <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'menu_homepage'
                            ) );

                        ?>
                            
                        </ul>
                    </div><!-- /dl-menuwrapper -->
                </div>
                <div class="col-md-9">
                    <div class="main_menu">

                        <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'menu_homepage'
                            ) );

                        ?>
                        
                    </div>
                      

       
                </div>
                
            </div>
        </div>
    </div>




