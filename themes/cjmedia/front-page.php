<?php
/**
 * The template for displaying all pages.
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<div class="front-logo">
					<p>hello</p>
				</div>

			

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
