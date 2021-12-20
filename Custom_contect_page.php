<?php /* Template Name: Custom_contect_page*/ 


 get_header(); ?>


<div class="contact_area" id="contact" >
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              
                <?php while(have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; ?>




            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>