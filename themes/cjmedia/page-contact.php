<?php
/**
 * The template for displaying contact page.
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
		<main id="main" class="site-main-contact" role="main">

		<div class="contact-header">

			<div class="contact-header-box">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<h2><?php bloginfo( 'name' ); ?></h2>
				<div class="contact-box"></div>
			</div><!-- .entry-header -->


		</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
