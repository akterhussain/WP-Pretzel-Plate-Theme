<?php get_header(); ?>
	<div class="page_content">
		<div class="container">
			<div class="row">
		            <div class="col-xl-12">
		            <div class="page_content_area">
		            	<?php while(have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; ?>
		            </div>
	            </div>
            </div>
		</div>
	</div>


<?php get_footer(); ?>