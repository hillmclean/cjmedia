<?php
/**
 * The template for displaying the front page.
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_template_part( 'template-parts/header', 'page-front' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<div class="front-info">
		

				<div class="container-logo">
					<div class="front-logo" style="background: url(<?php  echo the_field('logo_home'); ?>); background-size: cover; background-position: top;"></div> 
				</div>

				<div class="front-img-flex-box">
				<?php if(have_rows('home_boxes_repeater')): ?> 
					<?php while(have_rows('home_boxes_repeater')): the_row(); ?>
					<?php if( get_sub_field('box_background_image') ): ?>
						<div class="box-container">
						<a href="<?php the_sub_field('box_link'); ?>">
						<div class="box-image" style="background: url(<?php  echo the_sub_field('box_background_image'); ?>); background-size: cover; background-position: center;">
							<h2 class="box-title"><?php the_sub_field('box_title'); ?></h2>
						</div><!--#box-image -->
						</a>
					</div><!-- #box-container -->
					<?php endif; ?>
					<?php endwhile; ?>	
				<?php endif; ?>

					</div>

		</div><!-- #front-info -->		

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
