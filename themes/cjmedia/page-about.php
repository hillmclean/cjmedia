<?php
/**
 * The template for displaying about page.
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			<div class="top-image" style="background: url(<?php  echo the_field('top_image'); ?>); background-size: cover; background-position: center;"></div>

			<div class="site-info">
				<p class="site-title-heading"><?php the_field('body_p'); ?></p>	
			</div>

			<div class="top-image" style="background: url(<?php  echo the_field('middle_image'); ?>); background-size: cover; background-position: center;"></div>

			<div class="top-image" style="background: url(<?php  echo the_field('bottom_image'); ?>); background-size: cover; background-position: center;"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
