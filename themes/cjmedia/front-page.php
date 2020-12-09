<?php
/**
 * The template for displaying all pages.
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_template_part( 'template-parts/header', 'page-front' ); ?>

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

			<div class="front-grid">

				<div class="front-logo" style="background: url(<?php  echo the_field('logo_home'); ?>); background-size: cover; background-position: center;"></div> 


				<?php if(have_rows('home_boxes_repeater')): ?> 
					<?php while(have_rows('home_boxes_repeater')): the_row(); ?>
					<?php if( get_sub_field('box_background_image') ): ?>
						<div class="box-container">
						<a href="<?php the_sub_field('box_link'); ?>">
						<div class="box-image" style="background: url(<?php  echo the_sub_field('box_background_image'); ?>); background-size: cover; background-position: center;">
							<h2 class="box-title"><?php the_sub_field('box_title'); ?></h2>
						</div> 
						</a>
					</div>
					<?php endif; ?>
					<?php endwhile; ?>	
				<?php endif; ?>

			</div>



						


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
