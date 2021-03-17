<?php
/**
 * The template for displaying showcase category taxonomy archive pages.
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-show-tax" role="main">

		<header class="showcase-tax-header">
			<h1><?php get_the_archive_title()?></h1>
		</header><!-- .page-header -->
			
		<section class="projects">


			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
			<div class="project-video-container">
				<?php if ( has_post_thumbnail() ) {
					$vidImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full"); 
					} ?>
				
				<a href="<?php the_field('video_link'); ?>" data-lity data-featherlight="#<?php the_ID(); ?>" >
					<div id="<?php the_ID(); ?>" class="vid-thumbnail" style="background: url('<?php echo $vidImg[0]; ?>') no-repeat; background-size: cover; background-position: center;">
						<i class="fa fa-play" aria-hidden="true"></i> 
					</div> 
				</a>
			
			</div> <!-- .project-video-container -->

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif;?>
	

		</section> <!-- .projects --> 

	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
