<?php
/**
 * The template for displaying all pages.
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="site-info">
					<h1 class="site-title-heading"><?php the_field('site_name'); ?></h1>
					<div class="tagline-box">
						<p class="site-info-tagline"><?php the_field('site_tagline'); ?></p>
					</div>
					<div class="tagline-box">
						<p class="site-info-tagline"><?php the_field('site_tagline'); ?></p>
					</div>

					<div class="box-background-image" style="background: url(<?php  echo the_sub_field('logo_home'); ?>); background-size: cover; background-position: center;"></div> 


				<div class="front-grid">
					<div class="front-logo"></div>
				</div>

		<?php if(have_rows('home_boxes_repeater')):
				while(have_rows('home_boxes_repeater')): the_row();

				$sub_value = get_sub_field('box_title');
				echo $sub_value;
				endwhile;
		endif; ?>

		<?php if(have_rows('home_boxes_repeater')): ?> 
			<?php while(have_rows('home_boxes_repeater')): the_row(); ?>
			<?php if( get_sub_field('box_background_image') ): ?>
			<div class="box-image" style="background: url(<?php  echo the_sub_field('box_background_image'); ?>); background-size: cover; background-position: center;">
			<h5 class="founder-name"><div class="founder1-nameline" ></div><?php the_sub_field('box_title'); ?></h5>

		</div> 
			<?php endif; ?>
			<?php endwhile; ?>	
		<?php endif; ?>



						


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
