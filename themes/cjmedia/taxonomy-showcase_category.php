<?php
/**
 * The template for displaying showcase category taxonomy archive pages.
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="showcase-tax-header">
			<h1><?php get_the_archive_title()?></h1>
		</header><!-- .page-header -->
			

			<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php
					get_template_part( 'template-parts/content' );
				?>
		

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php $terms = get_terms( array(
					'taxonomy'=>'showcase_category',
					'hide_empty' => 0,
				));
				if (! empty($terms) && ! is_wp_error($terms)) :
				?>
				
				<div class="showcase-categories">
					<?php foreach($terms as $term) : ?>
						<a href="<?php echo get_term_link($term); ?>">
						<p><?php echo $term->name ?></p>
					</a>

					<?php endforeach; ?>
					<?php endif; ?>
				</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
