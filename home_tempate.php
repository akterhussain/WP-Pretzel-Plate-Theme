<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pretzel_Plate
 */

get_header();
?>
<main>
    <div class="slider-area">
        <div class="container">
            <div class="col-xl-12">
                <div class="pretzel-slider">
                    <?php
                $slider = new WP_Query(array(
                    'post_type' => 'pretzel_sliders'
                ));
                while($slider->have_posts()) : $slider->the_post();?>
                    <div class="slider-content">
                        <?php the_post_thumbnail('slider-img'); ?>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</main><!-- #main -->
<?php
get_footer();
