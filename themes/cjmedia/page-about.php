<?php
/**
 * The template for displaying about page.
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
		<main id="main" class="site-main-about" role="main">

		<div class="site-title-heading">
			<h1><?php the_field('body_p'); ?></h1>	
		</div>

		<div class="about-grid">
			
			<div class="image-1" style="background: url(<?php  echo the_field('image_1'); ?>); background-size: cover; background-position: center;"></div>

			<div class="image-1-blue-box"></div>

			<div class="content">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
			</div>


			<div class="image-2" style="background: url(<?php  echo the_field('image_2'); ?>); background-size: cover; background-position: center;"></div>

			<div class="image-3" style="background: url(<?php  echo the_field('image_3'); ?>); background-size: cover; background-position: center;"></div>

			<div class="image-1-red-box"></div>

			<div class="image-4" style="background: url(<?php  echo the_field('image_4'); ?>); background-size: cover; background-position: center;"></div>

			<div class="image-5" style="background: url(<?php  echo the_field('image_5'); ?>); background-size: cover; background-position: center;"></div>
		
		</div><!-- #about-grid --> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
