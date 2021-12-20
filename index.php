<?php get_template_part('header_part'); ?>

        


<div class="slider_items">
        <!-- ++++++++++++++++++++++++++ BOOTSTRAP CAROUSEL +++++++++++++++++++++++++++++ -->

        <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">

            <!--======= Wrapper for Slides =======-->
            <div class="carousel-inner" role="listbox">

                 <?php

            $carosul = new WP_Query(array(

                    'post_type' => 'pretzel_sliders'

                ));
            $akter = 0;

             while($carosul->have_posts()) : $carosul->the_post(); $akter ++ ?>

            <?php if($akter == 1) : ?>
                <div class="item active">

            <?php else : ?>
                <div class="item">
            <?php endif ?>


                <!--========= First Slide =========-->
                   <?php the_post_thumbnail(); ?>
                    <div class="carousel-caption kb_caption">
                        <h1 data-animation="animated flipInX"><?php the_title(); ?></h1>
                        <h2 data-animation="animated flipInX"> <?php the_excerpt(); ?> </h2>
                    </div>
                </div>

            <?php endwhile; ?>

            </div>

            <!--======= Navigation Buttons =========-->

            <!--======= Left Button =========-->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
                <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!--======= Right Button =========-->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- ++++++++++++++++++++++ END BOOTSTRAP CAROUSEL +++++++++++++++++++++++ -->

</div>




<div class="package_area" id="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title_area">
                    <h2>Our Products</h2>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">


<!-- Product Section Area -->
    <ul class="products">
        <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => 'product', 'orderby' => ' ' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <li class="product">    
                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                            <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                            <h3><?php the_title(); ?></h3>

                             <div class="rating-custom">
                                <?php wc_get_template( 'single-product/rating.php' ); ?>
                            </div>


                            <span class="price"><?php echo $product->get_price_html(); ?></span>                    
                        </a>
                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                    </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul><!--/.products-->

        <div class="show_more_content">
                         <a class="show_more" href="http://pretzelplate.com/?product_cat=product">Show More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                         </div>
            </div>
        </div>
    </div>
</div>




    <div class="about_us" id="about" >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_text_area">
                        <h2><?php  echo $pretzel_plate['about_title']; ?></h2>
                        <p><?php  echo $pretzel_plate['about_content']; ?></p>
                    </div>
                </div>
                    <div class="about_image_area">

                        <img src="<?php echo $pretzel_plate['about_image'] ['url']; ?> ">
                    </div>
                </div>
            </div>
        </div>
    </div>









<!-- flavor Section Area -->

<div class="package_area" id="packages">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title_area">
                    <h2>Our Flavors</h2>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">


<!-- flavor Section Area -->
    <ul class="products">
        <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => 'flavor', 'orderby' => ' ' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <li class="product">    
                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                            <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                            <h3><?php the_title(); ?></h3>

                             <div class="rating-custom">
                                <?php wc_get_template( 'single-product/rating.php' ); ?>
                            </div>


                            <span class="price"><?php echo $product->get_price_html(); ?></span>                    
                        </a>
                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                    </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul><!--/.products-->

        <div class="show_more_content">
                         <a class="show_more" href="http://pretzelplate.com/?product_cat=flavor">Show More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                         </div>
            </div>
        </div>
    </div>
</div>




<div class="speacial_gift_package">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="speacial_text">
                    <h3><?php global $pretzel_plate; echo $pretzel_plate['pacakeg_title']; ?></h3>
                    <p><?php  echo $pretzel_plate['pacakeg_content']; ?></p>

                    <a href="<?php  echo $pretzel_plate['pacakeg_buttonlink']; ?>">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="speacial_image">
                    <img src="<?php  echo $pretzel_plate['pacakeg_image'] ['url']; ?>">
                </div>
            </div>
        </div>
    </div>
</div>








<div class="package_area" id="purim">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title_area">
                    <h2>Purim/Holyday</h2>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">

    <ul class="products">
        <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => 'purim', 'orderby' => ' ' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <li class="product">    
                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                            <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                            <h3><?php the_title(); ?></h3>

                             <div class="rating-custom">
                                <?php wc_get_template( 'single-product/rating.php' ); ?>
                            </div>

                            <span class="price"><?php echo $product->get_price_html(); ?></span>                    
                        </a>
                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                    </li>
                     
        <?php endwhile; ?>
       
    </ul><!--/.products-->
            
         <div class="show_more_content">
                          <a class="show_more" href="http://pretzelplate.com/?product_cat=purim">Show More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                         </div>

            </div>
           
        </div>
    </div>
</div>




<div class="contact_area" id="contact" >
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="189" title="Prezel Contact"]'); ?>



            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>